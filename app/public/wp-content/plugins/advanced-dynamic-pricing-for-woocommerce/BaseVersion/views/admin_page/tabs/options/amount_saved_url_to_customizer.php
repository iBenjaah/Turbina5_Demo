<?php
defined('ABSPATH') or exit;
/**
 * @var string $amount_saved_customer_url
 */

?>

<tr valign="top">
    <th scope="row" class="titledesc"><?php esc_html_e('Amount saved', 'advanced-dynamic-pricing-for-woocommerce') ?></th>
    <td class="forminp forminp-checkbox">
        <fieldset>
            <label>
                <input <?php checked( $options['is_enable_cart_amount_saved'] ) ?> name="is_enable_cart_amount_saved" type="checkbox">
			    <?php esc_html_e( 'In the cart', 'advanced-dynamic-pricing-for-woocommerce' ) ?>
            </label>

            <label>
                <input <?php checked( $options['is_enable_minicart_amount_saved'] ) ?> name="is_enable_minicart_amount_saved" type="checkbox">
			    <?php esc_html_e( 'In the mini-cart', 'advanced-dynamic-pricing-for-woocommerce' ) ?>
            </label>


            <label>
                <input <?php checked( $options['is_enable_checkout_amount_saved'] ) ?> name="is_enable_checkout_amount_saved" type="checkbox">
			    <?php esc_html_e( 'On the checkout page', 'advanced-dynamic-pricing-for-woocommerce' ) ?>
            </label>

            <a href="<?php
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo $amount_saved_customer_url; ?>" target="_blank">
                <?php esc_html_e('Customize', 'advanced-dynamic-pricing-for-woocommerce') ?>
            </a>
        </fieldset>
    </td>
</tr>
