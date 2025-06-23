<?php
defined('ABSPATH') or exit;

/**
 * @var string $header_html
 * @var array $table_header
 * @var array $rows
 * @var array $data_rows
 * @var string $footer_html
 */


?>
<div class='clear'></div>

<div class="bulk_table">
    <div class="wdp_pricing_table_caption"><?php
        //phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText, WordPress.Security.EscapeOutput.OutputNotEscaped
        echo _x($header_html, 'bulk table header title', 'advanced-dynamic-pricing-for-woocommerce'); ?></div>
    <table class="wdp_pricing_table">
        <thead>
        <tr>
            <?php foreach ($table_header as $label): ?>
                <td><?php
                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo $label ?>
                </td>
            <?php endforeach; ?>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <?php foreach ($row as $html): ?>
                    <td><?php
                        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        echo $html ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <span class="wdp_pricing_table_footer"><?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $footer_html; ?></span>
</div>
