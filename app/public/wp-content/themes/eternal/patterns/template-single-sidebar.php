<?php
/**
 * Title: Single Posts with Sidebar
 * Slug: eternal/template-single-sidebar
 * Categories: eternal_templates
 * Template Types: single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main id="primary" class="wp-block-group">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"75%","metadata":{"name":"Posts Column"}} -->
			<div class="wp-block-column" style="flex-basis:75%">

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
					<div class="wp-block-group">
						<!-- wp:post-terms {"term":"category","className":"is-style-links-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast-3"} /-->

						<!-- wp:post-date {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"level":1} /-->

					<!-- wp:post-featured-image {"style":{"border":{"radius":"24px"}}} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-content /-->

				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {"term":"post_tag"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:template-part {"slug":"comments","tagName":"comments"} /-->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%","metadata":{"name":"Sidebar Column"}} -->
			<div class="wp-block-column" style="flex-basis:25%">

				<!-- wp:template-part {"slug":"sidebar","tagName":"sidebar"} /-->

			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
