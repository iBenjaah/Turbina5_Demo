<?php
/**
 * Title: Large Cover - Interior Designer
 * Slug: eternal/large-cover-interior-designer
 * Categories: eternal_sections, eternal_images
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Large Cover', 'eternal' ); ?>"},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri('assets/images/room-dining.jpg') ); ?>","hasParallax":true,"dimRatio":30,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":500,"minHeightUnit":"px","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"default"}} -->
	<div class="wp-block-cover is-light has-parallax has-base-color has-text-color has-link-color" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span>
		<div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri('assets/images/room-dining.jpg') ); ?>)"></div>
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"100"}},"fontSize":"xx-large"} -->
			<p class="has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:100;text-transform:uppercase"><?php esc_html_e( 'Specializing in luxury residential interiors', 'eternal' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->