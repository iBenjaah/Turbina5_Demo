<?php
/**
 * Title: Homepage Contractor
 * Slug: eternal/page-homepage-contractor
 * Categories: eternal_pages
 */
?>

<!-- wp:pattern {"slug":"eternal/large-image-services-overlap"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
	<p class="has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Specializing in', 'eternal' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-3-color"><strong><em><?php esc_html_e( 'Home Improvement', 'eternal' ); ?></em></strong></mark></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"10%"} -->
		<div class="wp-block-column" style="flex-basis:10%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Shift Right', 'eternal' ); ?>"},"className":"is-style-shift-right-small","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-shift-right-small">
				<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Circle', 'eternal' ); ?>"},"className":"is-style-circle-align-middle","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"base-3","layout":{"type":"default"}} -->
				<div class="wp-block-group is-style-circle-align-middle has-base-3-background-color has-background" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:heading {"level":3,"fontSize":"xx-large"} -->
					<h3 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'PLUMBING', 'eternal' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color"><?php esc_html_e( 'As trusted plumbing contractors, we provide reliable, efficient, and affordable plumbing services.', 'eternal' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"width":"5px"}},"borderColor":"base-3"} -->
			<figure class="wp-block-image size-full has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/plumber-square.jpg') ); ?>" alt="" class="has-border-color has-base-3-border-color" style="border-width:5px;aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"width":"5px"}},"borderColor":"base-3"} -->
			<figure class="wp-block-image size-full has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/electrical-square.jpg') ); ?>" alt="" class="has-border-color has-base-3-border-color" style="border-width:5px;aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Shift Left', 'eternal' ); ?>"},"className":"is-style-shift-left-small","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-shift-left-small">
				<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Circle', 'eternal' ); ?>"},"className":"is-style-circle-align-middle","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"accent-3","layout":{"type":"default"}} -->
				<div class="wp-block-group is-style-circle-align-middle has-accent-3-background-color has-background" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
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

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"10%"} -->
		<div class="wp-block-column" style="flex-basis:10%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Shift Right', 'eternal' ); ?>"},"className":"is-style-shift-right-small","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-shift-right-small">
				<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Circle', 'eternal' ); ?>"},"className":"is-style-circle-align-middle","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"base-3","layout":{"type":"default"}} -->
				<div class="wp-block-group is-style-circle-align-middle has-base-3-background-color has-background" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:heading {"level":3,"fontSize":"xx-large"} -->
					<h3 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'RENOVATE', 'eternal' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color"><?php esc_html_e( 'As a dedicated home renovation contractor, we transform spaces to meet your vision and lifestyle.', 'eternal' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"width":"5px"}},"borderColor":"base-3"} -->
			<figure class="wp-block-image size-full has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/construction-tools-square.jpg') ); ?>" alt="" class="has-border-color has-base-3-border-color" style="border-width:5px;aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
