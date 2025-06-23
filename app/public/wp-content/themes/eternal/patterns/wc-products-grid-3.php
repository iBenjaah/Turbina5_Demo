<?php
/**
 * Title: Products Grid - Style 3
 * Slug: eternal/wc-products-grid-3
 * Categories: eternal_parts
 * Block Types: core/template-part/products
 * Template Types: products
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":12,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">

		<!-- wp:woocommerce/product-template -->
		<!-- wp:group {"style":{"border":{"width":"1px","color":"var:preset|color|base-3","radius":"24px"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-base-2-background-color has-background" style="border-color:var(--wp--preset--color--base-3);border-width:1px;border-radius:24px">
			<!-- wp:group {"className":"is-style-last-child-hover","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-last-child-hover">
				<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":{"topLeft":"24px","topRight":"24px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

				<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"border":{"radius":{"topLeft":"24px","topRight":"24px"}},"color":{"background":"#ffffff61"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group has-background" style="border-top-left-radius:24px;border-top-right-radius:24px;background-color:#ffffff61;min-height:100%">
					<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous {"className":"is-style-links-plain","fontSize":"large"} /-->

			<!-- wp:query-pagination-numbers {"className":"is-style-circle-current"} /-->

			<!-- wp:query-pagination-next {"className":"is-style-links-plain","fontSize":"large"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->

		<!-- wp:woocommerce/product-collection-no-results -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-group">

			<!-- wp:pattern {"slug":"woocommerce/no-products-found-clear-filters"} /-->

		</div>
		<!-- /wp:group -->
		<!-- /wp:woocommerce/product-collection-no-results -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
