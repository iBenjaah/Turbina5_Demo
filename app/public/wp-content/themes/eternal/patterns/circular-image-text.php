<?php
/**
 * Title: Circular Image and Text
 * Slug: eternal/circular-image-text
 * Categories: eternal_images, eternal_sections
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--60);flex-basis:50%">
		<!-- wp:image {"aspectRatio":"1","scale":"cover","linkDestination":"none","className":"is-style-rounded","style":{"border":{"width":"5px"}},"borderColor":"base-3"} -->
		<figure class="wp-block-image has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/electrical-square.jpg') ); ?>" alt="" class="has-border-color has-base-3-border-color" style="border-width:5px;aspect-ratio:1;object-fit:cover" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"470px"} -->
	<div class="wp-block-column" style="flex-basis:470px">
		<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Shift Left', 'eternal' ); ?>"},"className":"is-style-shift-left-small","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-shift-left-small">
			<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Circle', 'eternal' ); ?>"},"className":"is-style-circle-align-middle","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"-30px"}}},"backgroundColor":"accent-3","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-circle-align-middle has-accent-3-background-color has-background" style="margin-top:-30px;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"xx-large"} -->
					<h3 class="wp-block-heading has-base-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e( 'ELECTRICAL', 'eternal' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
					<p class="has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'As skilled electrical contractors, we offer expert solutions for residential and commercial projects.', 'eternal' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"></div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
