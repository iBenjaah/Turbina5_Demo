<?php
/**
 * Title: Call to Action Cover
 * Slug: eternal/call-to-action-cover
 * Categories: eternal_sections, eternal_images
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"},"metadata":{"name":"<?php esc_html_e( 'Call to Action Cover', 'eternal' ); ?>"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri('assets/images/city.jpg') ); ?>","dimRatio":80,"gradient":"contrast-and-accent-1","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-contrast-and-accent-1-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri('assets/images/city.jpg') ); ?>" data-object-fit="cover" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"900","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-large"} -->
					<p class="has-base-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:900;line-height:1;text-transform:uppercase"><?php esc_html_e( 'Developed from years of', 'eternal' ); ?><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-1-color"><?php esc_html_e( 'experience', 'eternal' ); ?></mark></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
					<p class="has-base-color has-text-color has-link-color"><?php esc_html_e( "Our team of passionate professionals is dedicated to transforming your vision into impactful media experiences that captivate audiences and drive results. Let's embark on a journey of innovation and excellence together.", "eternal" ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"accent-1","textColor":"base","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase"}}} -->
						<div class="wp-block-button" style="text-transform:uppercase"><a class="wp-block-button__link has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px"><?php esc_html_e( 'Get in touch', 'eternal' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"border":{"left":{"color":"var:preset|color|accent-1","width":"4px"}},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="border-left-color:var(--wp--preset--color--accent-1);border-left-width:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);flex-basis:40%">
					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"base","layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-base-color has-text-color has-link-color" style="font-style:normal;font-weight:700;text-transform:uppercase">
						<!-- wp:paragraph {"className":"is-style-links-plain"} -->
						<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'Strategic Tailored Media Planning', 'eternal' ); ?></a></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-links-plain"} -->
						<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'Targeted Social Media Advertising', 'eternal' ); ?></a></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-links-plain"} -->
						<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'Creative Content Production', 'eternal' ); ?></a></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-links-plain"} -->
						<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'Reputation Management and PR', 'eternal' ); ?></a></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-links-plain"} -->
						<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'SEO Optimization for Online Dominance', 'eternal' ); ?></a></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-links-plain"} -->
						<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'Data-Driven Insights and Analytics', 'eternal' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
