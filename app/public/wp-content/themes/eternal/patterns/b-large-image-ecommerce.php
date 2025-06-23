<?php
/**
 * Title: Large Image with Ecommerce Features
 * Slug: eternal/large-image-ecommerce
 * Categories: eternal_images, eternal_sections
 */
?>
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri('assets/images/fashion.jpg') ); ?>","source":"file","title":""},"backgroundPosition":"50% 0"}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-background-color has-background">
	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"left":{"width":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide has-base-color has-text-color has-link-color" style="border-left-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"xx-large"} -->
		<p class="has-text-align-left has-xx-large-font-size"><?php echo wp_kses_post( __( '<strong>NEW</strong> COLLECTION', 'eternal' ) );?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo wp_kses_post( __( 'FOR THIS <strong>SEASON</strong>', 'eternal' ) );?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'SHOP NOW', 'eternal' );?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px"}},"border":{"radius":{"topLeft":"24px","topRight":"24px"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-base-2-background-color has-background" style="border-top-left-radius:24px;border-top-right-radius:24px;margin-top:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"width":"64px","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-truck.png') ); ?>" alt="" style="width:64px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( 'FREE DELIVERY', 'eternal' );?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
				<p class="has-text-align-center has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'On all orders', 'eternal' );?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"width":"64px","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-card.png') ); ?>" alt="" style="width:64px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( 'SECURE PAYMENT', 'eternal' );?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
				<p class="has-text-align-center has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Safe guarantee', 'eternal' );?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"width":"64px","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-chat.png') ); ?>" alt="" style="width:64px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( '24/7 SUPPORT', 'eternal' );?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
				<p class="has-text-align-center has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Customer service', 'eternal' );?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
