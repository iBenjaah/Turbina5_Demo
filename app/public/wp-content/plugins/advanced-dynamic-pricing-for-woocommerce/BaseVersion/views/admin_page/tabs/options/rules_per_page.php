<?php
defined('ABSPATH') or exit;

?>

<tr valign="top">
    <th scope="row" class="titledesc"><?php esc_html_e('Rules per page', 'advanced-dynamic-pricing-for-woocommerce') ?></th>
    <td class="forminp forminp-checkbox">
        <fieldset>
            <legend class="screen-reader-text">
                <span><?php esc_html_e('Rules per page', 'advanced-dynamic-pricing-for-woocommerce') ?></span></legend>
            <label for="rules_per_page">
                <input value="<?php echo esc_attr($options['rules_per_page']) ?>" name="rules_per_page" id="rules_per_page"
                       placeholder="25" type="number" min="1">
            </label>
        </fieldset>
    </td>
</tr>
