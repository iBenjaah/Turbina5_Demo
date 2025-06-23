<?php
/**
 * Title: Homepage Blog
 * Slug: eternal/template-homepage-blog
 * Categories: eternal_templates
 * Template Types: front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base-2"} -->
<main id="primary" class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":10,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:post-terms {"term":"category","className":"is-style-links-underline-on-hover","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->

					<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"large"} /-->

					<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
				<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous {"className":"is-style-links-plain","fontSize":"large"} /-->

				<!-- wp:query-pagination-numbers {"className":"is-style-circle-current"} /-->

				<!-- wp:query-pagination-next {"className":"is-style-links-plain","fontSize":"large"} /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
