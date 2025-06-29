<?php

use ADP\BaseVersion\Includes\Core\Rule\CartCondition\Interfaces\BinaryCondition;

defined('ABSPATH') or exit;

?>
<div class="wdp-column wdp-condition-subfield wdp-condition-field-value">
    <select name="rule[conditions][{c}][options][<?php echo esc_attr(BinaryCondition::COMPARISON_BIN_VALUE_KEY) ?>]">
        <option value="yes" selected><?php esc_attr_e('Yes', 'advanced-dynamic-pricing-for-woocommerce') ?></option>
        <option value="no"><?php esc_attr_e('No', 'advanced-dynamic-pricing-for-woocommerce') ?></option>
    </select>
</div>
