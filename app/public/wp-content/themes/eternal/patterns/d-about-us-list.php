<?php
/**
 * Title: About Us with List
 * Slug: eternal/about-us-list
 * Categories: eternal_sections, eternal_images
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'About Us with List', 'eternal' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:media-text {"align":"wide","mediaLink":"<?php echo esc_url( get_theme_file_uri('assets/images/bmw-car.png') ); ?>","mediaType":"image"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile">
		<figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/bmw-car.png') ); ?>" alt="" /></figure>
		<div class="wp-block-media-text__content">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'About Us', 'eternal' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We are dedicated to providing top-quality auto repair and maintenance services to keep your vehicle running smoothly and safely. With a team of certified technicians and a commitment to customer satisfaction, we offer a wide range of services, from routine maintenance to complex repairs. Trust us to deliver reliable care and exceptional service every time.', 'eternal' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-line"} -->
			<ul class="wp-block-list is-style-line">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Certified and experienced technicians', 'eternal' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Comprehensive auto repair and maintenance services', 'eternal' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'State-of-the-art diagnostic tools and equipment', 'eternal' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Fast, reliable service with transparent pricing', 'eternal' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Commitment to customer satisfaction and safety', 'eternal' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->
