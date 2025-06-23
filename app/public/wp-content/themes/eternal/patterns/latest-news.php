<?php
/**
 * Title: Latest News
 * Slug: eternal/latest-news
 * Categories: eternal_sections
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'News', 'eternal' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60","margin":{"top":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Latest News', 'eternal' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		<!-- wp:columns {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-columns has-base-background-color has-background" style="border-radius:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);flex-basis:30%">
				<!-- wp:post-terms {"term":"category","className":"is-style-links-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast-3"} /-->

				<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover"} /-->

				<!-- wp:post-excerpt {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->

				<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"70%"} -->
			<div class="wp-block-column" style="flex-basis:70%">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topRight":"24px","bottomRight":"24px"}}}} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":"2"}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"24px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:post-terms {"term":"category","className":"is-style-links-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast-3"} /-->

				<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover"} /-->

				<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
