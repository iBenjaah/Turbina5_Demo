<?php

namespace ADP\BaseVersion\Includes\VolumePricingTable;

use ADP\BaseVersion\Includes\Context;
use ADP\BaseVersion\Includes\CustomizerExtensions\CustomizerExtensions;
use ADP\BaseVersion\Includes\Database\Repository\PersistentRuleRepository;
use ADP\BaseVersion\Includes\Database\Repository\RuleRepository;
use ADP\Factory;
use ADP\BaseVersion\Includes\Engine;

defined('ABSPATH') or exit;

class RangeDiscountTableAjax
{
    const ACTION = 'get_table_with_product_bulk_table';

    /**
     * @var Context
     */
    protected $context;

    /**
     * @var RangeDiscountTable
     */
    protected $rangeDiscountTable;

    /**
     * @param Context|CustomizerExtensions $contextOrCustomizer
     * @param null $deprecated
     */
    public function __construct($contextOrCustomizer, $customizerOrEngine, $deprecated = null)
    {
        $this->context            = adp_context();
        $customizer               = $contextOrCustomizer instanceof CustomizerExtensions ? $contextOrCustomizer : $customizerOrEngine;
        $engine                   = $customizerOrEngine instanceof Engine ? $customizerOrEngine : $deprecated;
        $this->rangeDiscountTable = Factory::get("VolumePricingTable_RangeDiscountTable", $customizer, $engine);
    }

    public function withContext(Context $context)
    {
        $this->context = $context;
    }

    public function register()
    {
        add_action("wp_ajax_nopriv_" . self::ACTION, array($this, "handle"));
        add_action("wp_ajax_" . self::ACTION, array($this, "handle"));
    }

    public function handle()
    {
        //phpcs:ignore WordPress.Security.NonceVerification.Recommended, WordPress.Security.ValidatedSanitizedInput
        $productID = ! empty($_REQUEST['product_id']) ? $_REQUEST['product_id'] : false;
        //phpcs:ignore WordPress.Security.NonceVerification.Recommended, WordPress.Security.ValidatedSanitizedInput
        $attributes = ! empty($_REQUEST['attributes']) ? $_REQUEST['attributes'] : array();

        if ( ! $productID) {
            wp_send_json_error();
        }

        if ($content = $this->rangeDiscountTable->getProductTableContent($productID, $attributes)) {
            wp_send_json_success($content);
        } else {
            wp_send_json_error("");
        }
    }
}
