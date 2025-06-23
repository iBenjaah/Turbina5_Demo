<?php
/**
 * Title: Large Cover with Button
 * Slug: eternal/large-cover-with-button
 * Categories: eternal_sections, eternal_images
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri('assets/images/garage-beetle.jpg') ); ?>","dimRatio":30,"customOverlayColor":"#676767","minHeight":500,"metadata":{"name":"<?php esc_html_e( 'Large Cover with Button', 'eternal' ); ?>"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#676767"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri('assets/images/garage-beetle.jpg') ); ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
			<p class="has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:600">Professional<br><em><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-2-color">Auto Repair</mark></strong></em> &amp; Maintenance<br>Services <em><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-2-color">since 1996</mark></strong></em></p>
			<!-- /wp:paragraph -->
			<!-- wp:spacer {"height":"3em"} -->
			<div style="height:3em" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent-2","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"0px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-accent-2-background-color has-background wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><strong><?php esc_html_e( 'BOOK APPOINTMENT', 'eternal' ); ?></strong></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
