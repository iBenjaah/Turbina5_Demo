<?php
/**
 * Title: Ecommerce Header Minimal
 * Slug: eternal/wc-part-header-minimal
 * Categories: eternal_parts
 * Block Types: core/template-part/header
 * Template Types: header, checkout-header
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

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"icon":"menu","overlayBackgroundColor":"base-2","overlayTextColor":"contrast","layout":{"type":"flex","setCascadingProperties":true},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"className":"is-style-no-border","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"color":{"background":"#ffffff00"}},"textColor":"contrast","fontSize":"small"} /-->

				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon"} /-->

				<!-- wp:woocommerce/mini-cart {"productCountVisibility":"always"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
