<?php
defined('ABSPATH') or exit;

/**
 * @var $context \ADP\BaseVersion\Includes\Context
 */

$tax_classes = array(
    array(
        'slug'  => "",
        //phpcs:ignore WordPress.WP.I18n.TextDomainMismatch
        'title' => __('Not taxable', 'phone-orders-for-woocommerce'),
    ),
    array(
        'slug'  => "standard",
        //phpcs:ignore WordPress.WP.I18n.TextDomainMismatch
        'title' => __('Standard rate', 'phone-orders-for-woocommerce'),
    ),
);
foreach (WC_Tax::get_tax_classes() as $tax_class_title) {
    $tax_classes[] = array(
        'slug'  => sanitize_title($tax_class_title),
        'title' => $tax_class_title,
    );
}

?>
<div class="wdp-column wdp-cart-adjustment-value">
    <input name="rule[cart_adjustments][{ca}][options][0]" class="adjustment-value" type="number"
           placeholder="0.00" step="any" min="0">
</div>
<div class="wdp-column wdp-cart-adjustment-value">
    <input name="rule[cart_adjustments][{ca}][options][1]" class="adjustment-value" type="text"
           placeholder="<?php esc_attr_e('fee name', 'advanced-dynamic-pricing-for-woocommerce') ?>"
           value="<?php echo esc_attr($context->getOption('default_fee_name')); ?>">
</div>
<div class="wdp-column wdp-cart-adjustment-value">
    <select name="rule[cart_adjustments][{ca}][options][2]" class="adjustment-value">
        <?php foreach ($tax_classes as $tax):
            if (empty($tax['title'])) {
                continue;
            }
            ?>
            <option value="<?php echo esc_attr($tax['slug']); ?>"
                <?php selected($context->getOption('default_fee_tax_class'), $tax['slug'], true) ?>>
                <?php echo esc_html($tax['title']); ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
