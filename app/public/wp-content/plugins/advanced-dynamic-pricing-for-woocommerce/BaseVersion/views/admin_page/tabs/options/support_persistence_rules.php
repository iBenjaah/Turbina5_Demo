<?php
defined('ABSPATH') or exit;

?>

<tr valign="top">
    <th scope="row" class="titledesc"><?php esc_html_e('Support Product only rules',
            'advanced-dynamic-pricing-for-woocommerce') ?>
        <div style="font-style: italic; font-weight: normal; margin: 10px 0;">
            <label><?php esc_html_e('Use it only if you should setup huge # of product rules',
                    'advanced-dynamic-pricing-for-woocommerce') ?></label>
        </div>
    </th>
    <td class="forminp forminp-checkbox">
        <fieldset>
            <legend class="screen-reader-text">
                <span><?php esc_html_e('Support Product only rules',
                        'advanced-dynamic-pricing-for-woocommerce') ?></span></legend>
            <label for="support_persistence_rules">
                <input <?php checked($options['support_persistence_rules']) ?>
                    name="support_persistence_rules" id="support_persistence_rules" type="checkbox">
            </label>
            <a href="https://docs.algolplus.com/algol_pricing/rules/product-only-rule-type/"
               target="_blank"><?php esc_html_e('Read short guide', 'advanced-dynamic-pricing-for-woocommerce') ?></a>
            <a href="<?php
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo admin_url('admin.php?page=wdp_settings&tab=tools#section=migration_rules');?>" style="margin-left: 10px;"
               target="_blank"><?php esc_html_e('Migrate rules', 'advanced-dynamic-pricing-for-woocommerce') ?></a>
        </fieldset>
    </td>
</tr>
