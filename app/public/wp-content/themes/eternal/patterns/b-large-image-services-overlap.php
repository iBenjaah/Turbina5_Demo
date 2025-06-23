<?php
/**
 * Title: Large Image with Services Overlap
 * Slug: eternal/large-image-services-overlap
 * Categories: eternal_images, eternal_sections
 */
?>
<!-- wp:group {"metadata":{"name":"Large Image with Services Overlap"},"align":"full","backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background">
    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri('assets/images/modern-kitchen.jpg') ); ?>","source":"file","title":""},"backgroundPosition":"50% 50%"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
        <!-- wp:spacer {"height":"300px"} -->
        <div style="height:300px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Welcome to Our Site', 'eternal' ); ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"300px"} -->
        <div style="height:300px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|60"},"margin":{"top":"-60px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:-60px">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"5px","top":{"radius":"11px","width":"0px","style":"none"},"right":{"radius":"11px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|accent-3","width":"3px"},"left":{"radius":"11px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent-3);border-bottom-width:3px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:group {"style":{"spacing":{"margin":{"top":"-70px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:-70px">
                    <!-- wp:group {"className":"is-style-circle-align-middle","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"layout":{"selfStretch":"fixed","flexSize":"6em"},"border":{"color":"#6363633b","width":"5px"}},"textColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-circle-align-middle has-border-color has-base-color has-text-color has-link-color" style="border-color:#6363633b;border-width:5px">
                        <!-- wp:group {"className":"is-style-circle-align-middle","backgroundColor":"contrast-2","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-circle-align-middle has-contrast-2-background-color has-background">
                            <!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
                            <p class="has-text-align-center has-x-large-font-size"><?php esc_html_e( '1', 'eternal' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'DESIGN', 'eternal' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
                <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Transforming your ideas into innovative designs, we specialize in tailored solutions that meet your unique vision and project needs.', 'eternal' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"textColor":"contrast","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"3px","width":"1px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","borderColor":"base-3"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color has-border-color has-base-3-border-color wp-element-button" style="border-width:1px;border-radius:3px"><?php esc_html_e( 'READ MORE', 'eternal' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"5px","top":{"radius":"11px","width":"0px","style":"none"},"right":{"radius":"11px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|accent-3","width":"3px"},"left":{"radius":"11px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent-3);border-bottom-width:3px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:group {"style":{"spacing":{"margin":{"top":"-70px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:-70px">
                    <!-- wp:group {"className":"is-style-circle-align-middle","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"layout":{"selfStretch":"fixed","flexSize":"6em"},"border":{"color":"#6363633b","width":"5px"}},"textColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-circle-align-middle has-border-color has-base-color has-text-color has-link-color" style="border-color:#6363633b;border-width:5px">
                        <!-- wp:group {"className":"is-style-circle-align-middle","backgroundColor":"contrast-2","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-circle-align-middle has-contrast-2-background-color has-background">
                            <!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
                            <p class="has-text-align-center has-x-large-font-size"><?php esc_html_e( '2', 'eternal' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'CREATE', 'eternal' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
                <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Bringing concepts to life with creative craftsmanship, ensuring every detail is carefully executed to meet the highest standards.', 'eternal' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"textColor":"contrast","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"3px","width":"1px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","borderColor":"base-3"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color has-border-color has-base-3-border-color wp-element-button" style="border-width:1px;border-radius:3px"><?php esc_html_e( 'READ MORE', 'eternal' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"5px","top":{"radius":"11px","width":"0px","style":"none"},"right":{"radius":"11px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|accent-3","width":"3px"},"left":{"radius":"11px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent-3);border-bottom-width:3px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:group {"style":{"spacing":{"margin":{"top":"-70px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:-70px">
                    <!-- wp:group {"className":"is-style-circle-align-middle","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"layout":{"selfStretch":"fixed","flexSize":"6em"},"border":{"color":"#6363633b","width":"5px"}},"textColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-circle-align-middle has-border-color has-base-color has-text-color has-link-color" style="border-color:#6363633b;border-width:5px">
                        <!-- wp:group {"className":"is-style-circle-align-middle","backgroundColor":"contrast-2","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-circle-align-middle has-contrast-2-background-color has-background">
                            <!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
                            <p class="has-text-align-center has-x-large-font-size"><?php esc_html_e( '3', 'eternal' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'BUILD', 'eternal' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
                <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'From foundation to finishing touches, we construct durable, high-quality structures that align with your goals and exceed expectations.', 'eternal' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"textColor":"contrast","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"3px","width":"1px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","borderColor":"base-3"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color has-border-color has-base-3-border-color wp-element-button" style="border-width:1px;border-radius:3px"><?php esc_html_e( 'READ MORE', 'eternal' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->
