<?php
/**
 * Title: Services - Grid Layout
 * Slug: eternal/services-grid
 * Categories: eternal_sections
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Services - Grid Layout', 'eternal' ); ?>"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"},":hover":{"color":{"text":"var:preset|color|base"}}}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"backgroundColor":"contrast","textColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"22rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"metadata":{"name":"Service #1"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"48px","linkDestination":"none","style":{"color":{"duotone":["#87c826","#ffffff"]}}} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-wrench.png') ); ?>" alt="" style="width:48px" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Maintenance', 'eternal' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
			<ul class="wp-block-list is-style-check has-accent-2-color has-text-color has-link-color">
				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Oil Changes', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Fluid Checks &amp; Top-ups', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Tune-Ups', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Service #2"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"48px","linkDestination":"none","style":{"color":{"duotone":["#87c826","#ffffff"]}}} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-brakes.png') ); ?>" alt="" style="width:48px" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Brakes &amp; Suspension', 'eternal' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
			<ul class="wp-block-list is-style-check has-accent-2-color has-text-color has-link-color">
				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Brake Services', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Suspension', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Steering Repairs', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Services #3"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"48px","linkDestination":"none","style":{"color":{"duotone":["#87c826","#ffffff"]}}} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-engine.png') ); ?>" alt="" style="width:48px" /></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Engine &amp; Transmission', 'eternal' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
			<ul class="wp-block-list is-style-check has-accent-2-color has-text-color has-link-color">
				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Engine Repairs', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Diagnostics', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Transmission Services', 'eternal' ); ?></mark></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
