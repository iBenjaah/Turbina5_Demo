<?php
/**
 * Title: Products Grid - Style 2
 * Slug: eternal/wc-products-grid-2
 * Categories: eternal_parts
 * Block Types: core/template-part/products
 * Template Types: products
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":10,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"list","columns":2,"shrinkColumns":true},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"24px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
		<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
					<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"className":"is-style-gallery-image-on-hover","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"24px"}}} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
					<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"is-style-links-underline-on-hover","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"large","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

					<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textColor":"accent-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}}} /-->

					<!-- wp:post-excerpt {"excerptLength":100} /-->

					<!-- wp:woocommerce/product-sku {"isDescendentOfQueryLoop":true} /-->

					<!-- wp:woocommerce/product-stock-indicator {"isDescendentOfQueryLoop":true,"fontSize":"medium"} /-->

					<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"medium","style":{"typography":{"textTransform":"uppercase"}}} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
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
