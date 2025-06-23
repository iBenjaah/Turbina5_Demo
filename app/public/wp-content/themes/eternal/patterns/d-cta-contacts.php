<?php
/**
 * Title: Call to Action with Contacts
 * Slug: eternal/cta-contacts
 * Categories: eternal_sections, eternal_images
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Call to Action with Contacts', 'eternal' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-2-background-color has-background" style="margin-top:0;padding-top:0;padding-bottom:0">
	<!-- wp:media-text {"align":"full","mediaLink":"<?php echo esc_url( get_theme_file_uri('assets/images/mechanic.jpg') ); ?>","mediaType":"image","imageFill":false} -->
	<div class="wp-block-media-text alignfull is-stacked-on-mobile">
		<figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/mechanic.jpg') ); ?>" alt="" /></figure>
		<div class="wp-block-media-text__content">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
				<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Professional Auto Repair &amp; Maintenance Services', 'eternal' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"24px","linkDestination":"none","style":{"color":{"duotone":["#87c826","#ffffff"]}}} -->
					<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-clock.png') ); ?>" alt="" style="width:24px" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
					<p class="has-base-3-color has-text-color has-link-color">Mon-Fri: <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color">9am</mark> to <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color">6pm</mark> | Sat: <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color">9am</mark> to <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color">1pm</mark></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"24px","linkDestination":"none","style":{"color":{"duotone":["#87c826","#ffffff"]}}} -->
					<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-phone.png') ); ?>" alt="" style="width:24px" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
					<p class="has-base-3-color has-text-color has-link-color">Call us <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color"><strong><?php esc_html_e( '555-456-7890', 'eternal' ); ?></strong></mark></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"24px","linkDestination":"none","style":{"color":{"duotone":["#87c826","#ffffff"]}}} -->
					<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-circle-arrow.png') ); ?>" alt="" style="width:24px" /></figure>
					<!-- /wp:image -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"accent-2","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"0px"}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-accent-2-background-color has-background wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><strong><?php esc_html_e( 'BOOK APPOINTMENT', 'eternal' ); ?></strong></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->
