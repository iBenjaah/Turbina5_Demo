<?php
/**
 * Title: Company Intro with Button
 * Slug: eternal/company-intro-button
 * Categories: eternal_images, eternal_sections
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":"<?php esc_html_e( 'Company Intro with Button', 'eternal' ); ?>"}} -->
<div class="wp-block-group alignfull" style="margin-top:0">
	<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"<?php echo esc_url( get_theme_file_uri('assets/images/working.jpg') ); ?>","mediaType":"image","mediaWidth":40,"imageFill":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base-3","textColor":"contrast"} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-contrast-color has-base-3-background-color has-text-color has-background has-link-color" style="padding-right:0;padding-left:0;grid-template-columns:auto 40%">
		<div class="wp-block-media-text__content">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"8vw","bottom":"8vw","left":"6vw","right":"6vw"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"540px","justifyContent":"right"}} -->
			<div class="wp-block-group" style="padding-top:8vw;padding-right:6vw;padding-bottom:8vw;padding-left:6vw">
				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php esc_html_e( 'Bespoke Creative Agency', 'eternal' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( "We are a creative digital agency dedicated to delivering top-notch web design and development services. Our talented team specializes in crafting visually stunning, user-friendly websites that drive growth and enhance brand presence. Whether you're a startup or an established business, we bring your digital vision to life with precision and innovation.", "eternal" ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'We offer a full suite of services, including responsive web design, custom development, e-commerce solutions, and digital marketing. Our expertise also covers UI/UX design, content management systems, and SEO, ensuring your website not only looks great but performs at its best. We leverage the latest technologies to provide scalable solutions tailored to your business needs.', 'eternal' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Partnering with us means working with a team committed to your success. We collaborate closely with you to create solutions that align with your brand and objectives, delivering measurable results. With a focus on quality, transparency, and customer satisfaction, we’re here to help your business thrive in the digital world.', 'eternal' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'GET A QUOTE', 'eternal' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_theme_file_uri('assets/images/working.jpg') ); ?>);background-position:50% 50%"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/working.jpg') ); ?>" alt="" /></figure>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->
