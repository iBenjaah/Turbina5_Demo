<?php
defined('ABSPATH') or exit;

/**
 * @var array $options
 * @var string $product_bulk_table_customizer_url
 * @var string $category_bulk_table_customizer_url
 * @var array $sections
 * @var \ADP\BaseVersion\Includes\AdminExtensions\AdminPage\Tabs\Options $tabHandler
 * @var string $amount_saved_customer_url
 * @var string $security
 * @var string $security_param
 */

?>

<div class="wdp-settings-search-wrapper">
    <div class="wdp-settings-search">
        <span class="dashicons dashicons-search"></span>
        <input type="text" placeholder="<?php esc_html_e('Search', 'advanced-dynamic-pricing-for-woocommerce') ?>">
        <span class="dashicons dashicons-dismiss hide"></span>
    </div>
</div>

<div class="wdp-settings-wrapper">
    <ul class="subsubsub">
        <?php
        $last_index = "order";
        foreach ($sections as $index => $section):
            if (empty($section['templates'])) {
                continue;
            }
            $section_title = $section['title'];
            ?>
            <li>
                <a class="section_choice"
                   data-section="<?php
                   // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo $index; ?>" href="#section=<?php
                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo $index; ?>">
                    <?php echo esc_html($section_title); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul><br class="clear"/>

    <div class="wdp-settings-sections-wrapper">
        <script>
            </script>
        <form method="post">
            <input type="hidden" name="action" value="wdp">
            <input type="hidden" name="tab" value="<?php echo esc_attr($tabHandler::getKey()); ?>"/>
            <input type="hidden" name="<?php echo esc_attr($security_param); ?>" value="<?php echo esc_attr($security); ?>"/>
            <div class="wdp-settings-search-results-wrapper">
                <h1 class="title hide"><?php esc_html_e('Search results', 'advanced-dynamic-pricing-for-woocommerce') ?></h1>
                <div class="empty-results hide"><?php esc_html_e('No options found', 'advanced-dynamic-pricing-for-woocommerce') ?></div>
            </div>
            <?php foreach ($sections as $index => $section):
                $class = array('section', $index . '-settings-section');
                $id = $index . '_section';
                $label = $section['title'];
                $docLink = $section['doc_link'] ?? '';
                ?>
                <div class="section settings-section" id="<?php echo esc_attr($id); ?>">
                    <h2 style="display: inline-block"><?php echo esc_html($label); ?></h2>
                    <?php if ($docLink) : ?>
                        <a style="display: inline-block; margin-left: 15px" href="<?php echo esc_url($docLink); ?>" target="_blank">
                            <?php esc_html_e('Read docs', 'advanced-dynamic-pricing-for-woocommerce'); ?>
                        </a>
                    <?php endif; ?>
                    <table class="section-settings">
                        <?php
                        if (isset($section['templates']) && is_array($section['templates'])) {
                            foreach ($section['templates'] as $template) {
                                $tabHandler->renderOptionsTemplate($template,
                                    compact('options', 'product_bulk_table_customizer_url',
                                        'category_bulk_table_customizer_url', 'amount_saved_customer_url'));
                            }
                        }
                        ?>
                    </table>
                </div>
            <?php endforeach; ?>

            <a href="https://algolplus.com/plugins/downloads/advanced-dynamic-pricing-woocommerce-pro/?currency=USD"
               target=_blank><?php esc_html_e('Need more settings?', 'advanced-dynamic-pricing-for-woocommerce') ?></a>

            <p class="wdp-settings-button">
                <button type="submit" class="button button-primary" name="save-options"><?php esc_html_e('Save changes',
                        'advanced-dynamic-pricing-for-woocommerce') ?></button>
            </p>
        </form>
    </div>
</div>
