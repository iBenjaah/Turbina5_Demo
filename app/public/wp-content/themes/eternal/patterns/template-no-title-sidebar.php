<?php
/**
 * Title: Pages no title, with Sidebar
 * Slug: eternal/template-no-title-sidebar
 * Categories: eternal_templates
 * Template Types: no-title
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

				<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
				<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:post-content /-->

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
