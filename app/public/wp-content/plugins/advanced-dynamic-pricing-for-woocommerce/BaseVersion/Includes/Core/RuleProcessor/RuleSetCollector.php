<?php

namespace ADP\BaseVersion\Includes\Core\RuleProcessor;

use ADP\BaseVersion\Includes\Core\Cart\Cart;
use ADP\BaseVersion\Includes\Core\Cart\CartItem\Type\Base\CartItemAttributeEnum;
use ADP\BaseVersion\Includes\Core\Cart\CartItem\Type\ICartItem;
use ADP\BaseVersion\Includes\Core\Rule\PackageRule;
use ADP\BaseVersion\Includes\Core\Rule\Structures\PackageItem;
use ADP\BaseVersion\Includes\Core\Rule\Structures\PackageItemFilter;
use ADP\BaseVersion\Includes\Core\Rule\Structures\Range;
use ADP\BaseVersion\Includes\Core\RuleProcessor\Structures\CartItemsCollection;
use ADP\BaseVersion\Includes\Core\RuleProcessor\Structures\CartSet;
use ADP\BaseVersion\Includes\Core\RuleProcessor\Structures\CartSetCollection;
use ADP\BaseVersion\Includes\Core\Cart\CartItem\Type\Basic\BasicCartItem;
use ADP\Factory;
use Exception;

defined('ABSPATH') or exit;

class RuleSetCollector
{
    /**
     * @var PackageRule
     */
    protected $rule;

    /**
     * @var CartItemsCollection
     */
    protected $mutableItemsCollection;

    protected $checkExecutionTimeCallback;

    protected $packages;

    /**
     * @var PackageItemFilter|null
     */
    protected $previousFilter;

    /**
     * @param PackageRule $rule
     */
    public function __construct($rule)
    {
        $this->rule                   = $rule;
        $this->mutableItemsCollection = new CartItemsCollection($rule->getId());
        $this->packages               = array();
    }

    public function registerCheckExecutionTimeFunction($callable, $context)
    {
        $this->checkExecutionTimeCallback = array(
            'callable' => $callable,
            'context'  => $context,
        );
    }

    private function checkExecutionTime()
    {
        if ( ! isset($this->checkExecutionTimeCallback['callable']) && $this->checkExecutionTimeCallback['context']) {
            return;
        }

        $callable = $this->checkExecutionTimeCallback['callable'];
        $context  = $this->checkExecutionTimeCallback['context'];

        call_user_func($callable, $context);
    }

    /**
     * @param array<int, BasicCartItem> $mutableItems
     */
    public function addItems($mutableItems)
    {
        foreach ($mutableItems as $index => $cartItem) {
            $this->mutableItemsCollection->add($cartItem);
        }
    }

    /**
     * @param $cart Cart
     *
     * @throws Exception
     */
    public function applyFilters($cart)
    {
        $packages = array();

        // hashes with highest priority
        $typeProductsHashes = array();

        $this->previousFilter = null;
        foreach ($this->rule->getPackages() as $package) {
            $packages[] = $this->preparePackage($cart, $package, $typeProductsHashes);
        }

        if (count($packages) === count($this->rule->getPackages())) {
            $this->packages = $packages;
        }

        foreach ($this->packages as &$filter) {
            $isProductFilter = $filter['is_product_filter'];
            unset($filter['is_product_filter']);

            /** Do not reorder 'exact products' filter hashes */
            if ($isProductFilter) {
                continue;
            }

            foreach (array_reverse($typeProductsHashes) as $hash) {
                foreach ($filter['valid_hashes'] as $index => $validHash) {
                    if ($hash === $validHash) {
                        unset($filter['valid_hashes'][$index]);
                        $filter['valid_hashes'][] = $hash;
                        $filter['valid_hashes']   = array_values($filter['valid_hashes']);
                        break;
                    }
                }
            }
        }
    }

    /**
     * @param Cart $cart
     * @param PackageItem $package
     * @param array $typeProductsHashes
     *
     * @return array
     */
    protected function preparePackage($cart, $package, &$typeProductsHashes)
    {
        $filters = $package->getFilters();
//		$excludes = $package->getExcludes();

        /**
         * @var $productFiltering ProductFiltering
         * @var $productExcluding ProductFiltering
         */
        $productFiltering = Factory::get("Core_RuleProcessor_ProductFiltering", $cart->getContext()->getGlobalContext());
        $productExcluding = Factory::get("Core_RuleProcessor_ProductFiltering", $cart->getContext()->getGlobalContext());
        $limitation              = $package->getLimitation();


        $valid_hashes = array();

        foreach ($this->mutableItemsCollection->get_items() as $cartItem) {
            /**
             * @var $cartItem BasicCartItem
             */
            $wcCartItemFacade = $cartItem->getWcItem();
            $product          = $wcCartItemFacade->getProduct();

//					$isExclude = false;
//
//					foreach ( $excludes as $exclude ) {
//						$productExcluding->prepare( $exclude->getType(), $exclude->getValue(), $exclude->getMethod() );
//
//						if ( $productExcluding->check_product_suitability( $product, $wcCartItemFacade->getData() ) ) {
//							$isExclude = true;
//							break;
//						}
//					}
//
//					if ( $isExclude ) {
//						continue;
//					}

            /**
             * Item must match all filters
             */
            $match = true;
            foreach ($filters as $filter) {
                $productFiltering->prepare($filter->getType(), $filter->getValue(), $filter->getMethod());

                $productExcluding->prepare(
                    $filter::TYPE_PRODUCT,
                    $filter->getExcludeProductIds(),
                    $filter::METHOD_IN_LIST
                );

                if ($productExcluding->checkProductSuitability($product, $wcCartItemFacade->getData())) {
                    $match = false;
                    break;
                }

                if ($filter->isExcludeWcOnSale() && $product->is_on_sale('')) {
                    $match = false;
                    break;
                }

                if ($filter->isExcludeAlreadyAffected() && $cartItem->areRuleApplied()) {
                    $match = false;
                    break;
                }

                if ( ! $productFiltering->checkProductSuitability($product, $wcCartItemFacade->getData())) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $valid_hashes[] = $cartItem->getHash();
                if ($productFiltering->isType('products')) {
                    $typeProductsHashes[] = $cartItem->getHash();
                }
            }
        }

        return array(
            'valid_hashes'      => $valid_hashes,
            'is_product_filter' => $productFiltering->isType('products'),
            'package'           => $package,
            'limitation'        => $limitation,
        );
    }

    /**
     * @param $cart Cart
     * @param $mode string
     *
     * @return CartSetCollection|false
     * @throws Exception
     */
    public function collectSets(&$cart, $mode = 'legacy')
    {
        if ('legacy' === $mode) {
            $collection = $this->collectSetsLegacy($cart);
        } else {
            $collection = false;
        }

        return $collection;
    }

    /**
     * @param string $limitation
     * @param array<int,string> $validHashes
     * @param Range $range
     *
     * @return array|null
     */
    private function handleUniqueLimitations($limitation, $validHashes, $range, &$collectedQtyInCart = 0)
    {
        $packageSetItems   = array();

        /** @var ICartItem[] $validItemsGrouped */
        $validItemsGrouped = [];

        foreach ($validHashes as $index => $validCartItemHash) {
            $cartItem = $this->mutableItemsCollection->getNotEmptyItemWithReferenceByHash($validCartItemHash);
            if ( ! $cartItem) {
                continue;
            }

            $product = $cartItem->getWcItem()->getProduct();

            if ($limitation === PackageItem::LIMITATION_UNIQUE_PRODUCT) {
                $productId = $product->get_parent_id() ? $product->get_parent_id() : $product->get_id();

                if ( ! isset($validItemsGrouped[$productId])) {
                    $validItemsGrouped[$productId] = $cartItem;
                }
            } elseif ($limitation === PackageItem::LIMITATION_UNIQUE_VARIATION) {
                if ( ! isset($validItemsGrouped[$product->get_id()])) {
                    $validItemsGrouped[$product->get_id()] = $cartItem;
                }
            } elseif ($limitation === PackageItem::LIMITATION_UNIQUE_HASH) {
                $validItemsGrouped[] = $cartItem;
            }
        }

        $collectedQtyInCart = count(
            array_filter(
                $validItemsGrouped,
                function ($v) {
                    return !$v->hasAttr(CartItemAttributeEnum::TEMPORARY());
                }
            )
        );

        if ($range->isLess(count($validItemsGrouped))) {
            return null;
        } elseif ($range->isIn(count($validItemsGrouped))) {
            // do nothing
        } elseif ($range->isGreater(count($validItemsGrouped))) {
            if ( ! is_infinite($range->getTo())) {
                $validItemsGrouped = array_slice($validItemsGrouped, 0, $range->getTo());
            }
        }

        foreach ($validItemsGrouped as $validItem) {
            $requireQty = 1;

            $setItem = clone $validItem;
            $setItem->setQty($setItem->getQty() - ($validItem->getQty() - $requireQty));
            $validItem->setQty($validItem->getQty() - $requireQty);

            $packageSetItems[] = $setItem;
        }

        return $packageSetItems;
    }

    /**
     * @param Cart $cart
     *
     * @return CartSetCollection
     * @throws Exception
     */
    public function collectSetsLegacy(&$cart)
    {
        $collection = new CartSetCollection();
        $applied    = true;

        while ($applied && $collection->getTotalSetsQty() !== $this->rule->getPackagesCountLimit()) {
            $setItems = array();

            foreach ($this->packages as $filter_key => &$filter) {
                $validHashes = ! empty($filter['valid_hashes']) ? $filter['valid_hashes'] : array();
                $limitation  = ! empty($filter['limitation']) ? $filter['limitation'] : PackageItem::LIMITATION_NONE;
                $isExcludeMatchedPreviousFilters = !empty($filter['excludeMatchedPreviousFilters']);
                $isSamePreviousFilters = !empty($filter['isSamePreviousFilters']);
                $package     = $filter['package'];
                /** @var $package PackageItem */
                $range = new Range($package->getQty(), $package->getQtyEnd(), $validHashes);

                $collectedQtyInCart = 0;

                if (in_array($limitation, array(
                    PackageItem::LIMITATION_UNIQUE_PRODUCT,
                    PackageItem::LIMITATION_UNIQUE_VARIATION,
                    PackageItem::LIMITATION_UNIQUE_HASH,
                ))) {
                    if ($packageSetItems = $this->handleUniqueLimitations($limitation, $validHashes, $range, $collectedQtyInCart)) {
                        $applied    = $applied && count($packageSetItems);
                        $setItems[] = $packageSetItems;
                    } else {
                        $applied = false;
                    }

                    foreach($package->getFilters() as $packageFilter) {
                        $packageFilter->setCollectedQtyInCart($collectedQtyInCart);
                    }

                    continue;
                }

                $valid_hashes_grouped = array();
                if ($limitation === PackageItem::LIMITATION_SAME_VARIATION) {
                    foreach ($validHashes as $index => $validCartItemHash) {
                        $cartItem = $this->mutableItemsCollection->getNotEmptyItemWithReferenceByHash($validCartItemHash);

                        if ( ! $cartItem) {
                            continue;
                        }
                        $product = $cartItem->getWcItem()->getProduct();

                        if ( ! isset($valid_hashes_grouped[$product->get_id()])) {
                            $valid_hashes_grouped[$product->get_id()] = array();
                        }

                        $valid_hashes_grouped[$product->get_id()][] = $validCartItemHash;
                    }
                } elseif ($limitation === PackageItem::LIMITATION_SAME_PRODUCT) {
                    foreach ($validHashes as $index => $validCartItemHash) {
                        $cartItem = $this->mutableItemsCollection->getNotEmptyItemWithReferenceByHash($validCartItemHash);

                        if ( ! $cartItem) {
                            continue;
                        }
                        $product   = $cartItem->getWcItem()->getProduct();
                        $productId = $product->get_parent_id() ? $product->get_parent_id() : $product->get_id();

                        if ( ! isset($valid_hashes_grouped[$productId])) {
                            $valid_hashes_grouped[$productId] = array();
                        }

                        $valid_hashes_grouped[$productId][] = $validCartItemHash;
                    }
                } elseif ($limitation === PackageItem::LIMITATION_SAME_HASH) {
                    foreach ($validHashes as $index => $validCartItemHash) {
                        $valid_hashes_grouped[] = array($validCartItemHash);
                    }
                } else {
                    $valid_hashes_grouped[] = $validHashes;
                }

                $filterApplied = false;

                foreach ($valid_hashes_grouped as $validHashes) {
                    $filterApplied = false;

                    $filterSetItems = array();

                    foreach ($validHashes as $index => $validCartItemHash) {
                        $cartItem = $this->mutableItemsCollection->getNotEmptyItemWithReferenceByHash($validCartItemHash);

                        if (is_null($cartItem)) {
                            unset($validHashes[$index]);
                            continue;
                        }

                        if ( $isExcludeMatchedPreviousFilters ) {
                            $atLeastOneInTheSet = false;
                            foreach ($setItems as $tmpFilterSetItems) {
                                foreach ($tmpFilterSetItems as $setItem) {
                                    if (
                                        ( apply_filters('adp_only_variation_parent', false) 
                                            || $setItem->getWcItem()->getVariationId() == $cartItem->getWcItem()->getVariationId()
                                        )
                                        && $setItem->getWcItem()->getProductId() == $cartItem->getWcItem()->getProductId()
                                    ) {
                                        $atLeastOneInTheSet = true;
                                    }
                                }
                            }
                            if ( $atLeastOneInTheSet ) {
                                continue;
                            }
                        }

                        if ($isSamePreviousFilters) {
                            $tmpFilterSetItems = end($setItems);
                            if ($tmpFilterSetItems) {
                                /** @var CartItem[] $tmpFilterSetItems */
                                $prevHashes = [];
                                foreach ($tmpFilterSetItems as $setItem) {
                                    $prevHashes[] = $setItem->getWcItem()->getKey();
                                }

                                if (!in_array($cartItem->getWcItem()->getKey(), $prevHashes, true)) {

                                    /**
                                     * A workaround to enable the `same as previous` filter.
                                     *
                                     * Return all collected set items into cart and pretend that filter has been applied.
                                     * In other words, we intentionally restart the `while` loop ignoring the fact that
                                     * previous run was unsuccessful.
                                     */

                                    $this->returnSetItemsToCart($setItems, $cart);
                                    $setItems = [];

                                    $filterApplied = true;
                                    break;
                                }
                            }
                        }

                        $collectedQty = 0;
                        $collectedQtyInCart = 0;
                        foreach ($filterSetItems as $filterSetItem) {
                            /**
                             * @var $filterSetItem BasicCartItem
                             */
                            if (!$filterSetItem->hasAttr(CartItemAttributeEnum::TEMPORARY())) {
                                $collectedQtyInCart += $filterSetItem->getQty();
                            }
                            $collectedQty += $filterSetItem->getQty();
                        }

                        if (!$cartItem->hasAttr(CartItemAttributeEnum::TEMPORARY())) {
                            $collectedQtyInCart += $cartItem->getQty();
                        }
                        $collectedQty += $cartItem->getQty();

                        if ( ! $range->isValid()) {
                            continue;
                        }

                        if ($range->isLess($collectedQty)) {
                            $setCartItem = clone $cartItem;
                            $cartItem->setQty(0);
                            $filterSetItems[] = $setCartItem;
                        } elseif ($range->isIn($collectedQty)) {
                            $setCartItem = clone $cartItem;
                            $cartItem->setQty(0);
                            $filterSetItems[] = $setCartItem;
                            $filterApplied    = true;
                            if ($range->getTo() === $collectedQty) {
                                break;
                            }
                        } elseif ($range->isGreater($collectedQty)) {
                            $modeValueTo = $range->getTo();
                            if (is_infinite($modeValueTo)) {
                                continue;
                            }

                            $requireQty = $modeValueTo + $cartItem->getQty() - $collectedQty;

                            $setCartItem = clone $cartItem;
                            $setCartItem->setQty($setCartItem->getQty() - ($cartItem->getQty() - $requireQty));
                            $cartItem->setQty($cartItem->getQty() - $requireQty);

                            $filterSetItems[] = $setCartItem;
                            $filterApplied    = true;
                            break;
                        }
                    }

                    if ($filterSetItems) {
                        if ($filterApplied) {
                            $setItems[] = $filterSetItems;
                        } else {
                            /**
                             * For range filters, try to put remaining items in set
                             *
                             * If range 'to' equals infinity or 'to' not equal 'from'
                             */
                            if ($range->getQty() === false || $range->getQty()) {
                                $collectedQtyInCart = 0;
                                $collectedQty = 0;
                                foreach ($filterSetItems as $filterSetItem) {
                                    /**
                                     * @var $filterSetItem BasicCartItem
                                     */
                                    $collectedQtyInCart += $filterSetItem->getQty();
                                    $collectedQty += $filterSetItem->getQty();
                                }

                                if ($range->isIn($collectedQty)) {
                                    $setItems[]     = $filterSetItems;
                                    $filterSetItems = array();
                                    $filterApplied  = true;
                                }
                            }

                            foreach ($filterSetItems as $item) {
                                /**
                                 * @var $item BasicCartItem
                                 */
                                $this->mutableItemsCollection->add($item);
                            }
                        }

                        $filterSetItems = array();
                    }

                    if ($filterApplied) {
                        break;
                    }
                }

                foreach($package->getFilters() as $packageFilter) {
                    $packageFilter->setCollectedQtyInCart($collectedQtyInCart);
                }

                $applied = $applied && $filterApplied;
            }

            if ($setItems && $applied) {
                $collection->add(new CartSet($this->rule->getId(), $setItems));
                $setItems = array();
            }

            $this->checkExecutionTime();
        }

        if ( ! empty($setItems)) {
            $this->returnSetItemsToCart($setItems, $cart);
        }

        if ( ! empty($filterSetItems)) {
            foreach ($filterSetItems as $item) {
                $cart->addToCart($item);
            }
        }

        foreach ($this->mutableItemsCollection->get_items() as $item) {
            /**
             * @var $item ICartItem
             */
            $cart->addToCart($item);
        }

        return $collection;
    }

    /**
     * @param array<int,array<int,CartItem>> $setItems
     * @param Cart $cart
     * @return void
     */
    private function returnSetItemsToCart($setItems, $cart)
    {
        foreach ($setItems as $tmpFilterSetItems) {
            foreach ($tmpFilterSetItems as $item) {
                $cart->addToCart($item);
            }
        }
    }

}
