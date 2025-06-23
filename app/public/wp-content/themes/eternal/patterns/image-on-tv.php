<?php
/**
 * Title: Image on TV
 * Slug: eternal/image-on-tv
 * Categories: eternal_images
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'TV', 'eternal' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"border":{"radius":"6px","color":"#1d2326","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"background":"#1d2326"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-background" style="border-color:#1d2326;border-width:2px;border-radius:6px;background-color:#1d2326;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#5b5b5b"}}},"typography":{"lineHeight":"1.2"},"spacing":{"blockGap":"0"},"color":{"text":"#5b5b5b"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-text-color has-link-color" style="color:#5b5b5b;line-height:1.2">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","linkDestination":"none","style":{"border":{"radius":"4px","color":"#333333","width":"1px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/abstract-wave.jpg') ); ?>" alt="" class="has-border-color" style="border-color:#333333;border-width:1px;border-radius:4px;aspect-ratio:16/9;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'TV BRAND', 'eternal' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
