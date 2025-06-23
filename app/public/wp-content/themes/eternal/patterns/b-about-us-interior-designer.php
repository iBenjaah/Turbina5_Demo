<?php
/**
 * Title: About Us - Interior Designer
 * Slug: eternal/about-us-interior-designer
 * Categories: eternal_sections, eternal_images
 * Keywords: about, images
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'About Us', 'eternal' ); ?>"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns {"isStackedOnMobile":false} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column">
					<!-- wp:image {"linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/chair.jpg') ); ?>" alt="" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:spacer {"height":"112px"} -->
					<div style="height:112px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:image {"linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/woman.jpg') ); ?>" alt="" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch","width":"56%","backgroundColor":"base-3"} -->
		<div class="wp-block-column is-vertically-aligned-stretch has-base-3-background-color has-background" style="flex-basis:56%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"8%"} -->
					<div class="wp-block-column" style="flex-basis:8%"></div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
					<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"fontSize":"xx-large"} -->
						<h2 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:100"><?php esc_html_e( 'About Us', 'eternal' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
						<p style="font-style:normal;font-weight:300"><?php esc_html_e( 'We specialize in designing luxurious residential spaces that blend elegance and comfort. Our expert team works closely with clients to create personalized interiors that reflect their unique style and needs.', 'eternal' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
						<p style="font-style:normal;font-weight:300"><?php esc_html_e( 'From custom furnishings to curated décor, every detail is thoughtfully executed with precision and care. Using the finest materials and craftsmanship, we transform homes into timeless, sophisticated spaces that elevate daily living and offer a retreat from the ordinary.', 'eternal' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
						<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
							<!-- wp:button {"textColor":"contrast","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
							<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color wp-element-button" href="#"><?php esc_html_e( 'Read More', 'eternal' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"8%"} -->
					<div class="wp-block-column" style="flex-basis:8%"></div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
