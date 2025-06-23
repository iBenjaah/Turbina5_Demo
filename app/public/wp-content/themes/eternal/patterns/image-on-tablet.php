<?php
/**
 * Title: Image on Tablet
 * Slug: eternal/image-on-tablet
 * Categories: eternal_images
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Tablet', 'eternal' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"border":{"radius":"12px","color":"#2d3335","width":"2px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"gradient":"linear-gradient(135deg,rgb(229,229,229) 0%,rgb(213,213,213) 100%)"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-background" style="border-color:#2d3335;border-width:2px;border-radius:12px;background:linear-gradient(135deg,rgb(229,229,229) 0%,rgb(213,213,213) 100%);padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"#2d3335"}}},"color":{"text":"#2d3335"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-text-color has-link-color" style="color:#2d3335">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"}}} -->
			<p class="has-text-align-center" style="line-height:1.2">o</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","linkDestination":"none","style":{"border":{"radius":"4px","color":"#636362","width":"1px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/abstract-wave.jpg') ); ?>" alt="" class="has-border-color" style="border-color:#636362;border-width:1px;border-radius:4px;aspect-ratio:16/9;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
