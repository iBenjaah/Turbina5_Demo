<?php
/**
 * Title: Header
 * Slug: eternal/part-header
 * Categories: eternal_parts
 * Block Types: core/template-part/header
 * Template Types: header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo /-->
				<!-- wp:site-title {"className":"is-style-links-plain"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"icon":"menu","overlayBackgroundColor":"base-2","overlayTextColor":"contrast","layout":{"type":"flex","setCascadingProperties":true},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
