<?php
/**
 * Title: Product Collection - Style 4
 * Slug: eternal/wc-product-collection-4
 * Categories: eternal_products
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"2px","right":"2px"}}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:2px;padding-right:2px;padding-bottom:2px;padding-left:2px">
	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":5,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":true},"queryContextIncludes":["collection"],"layout":{"type":"default"}} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template {"className":"is-style-default","style":{"typography":{"fontSize":"2px"}}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base","fontSize":"small","layout":{"type":"default"}} -->
		<div class="wp-block-group has-base-background-color has-background has-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"className":"is-style-gallery-image-on-hover","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
				<div class="wp-block-group">
					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->

					<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-icon-auto","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
