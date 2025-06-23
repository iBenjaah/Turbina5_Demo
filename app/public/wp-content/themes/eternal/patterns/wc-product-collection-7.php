<?php
/**
 * Title: Product Collection - Style 7
 * Slug: eternal/wc-product-collection-7
 * Categories: eternal_products
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":10,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"filterable":false},"tagName":"div","displayLayout":{"type":"list","columns":2,"shrinkColumns":true},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":""} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"className":"is-style-gallery-image-on-hover","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"2.4rem"} -->
				<div class="wp-block-column" style="flex-basis:2.4rem"></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"0","left":"0"}}}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0">
					<!-- wp:group {"className":"is-style-shift-left-large","style":{"border":{"bottom":{"color":"var:preset|color|contrast","width":"4px"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group is-style-shift-left-large" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:4px"></div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"-4px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"width":"4px"}},"backgroundColor":"base","textColor":"contrast","borderColor":"contrast","layout":{"type":"default"}} -->
					<div class="wp-block-group has-border-color has-contrast-border-color has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="border-width:4px;margin-top:-4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
						<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"is-style-links-underline-on-hover","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

						<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"large","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

						<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textColor":"accent-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}}} /-->

						<!-- wp:post-excerpt {"excerptLength":100} /-->

						<!-- wp:woocommerce/product-sku {"isDescendentOfQueryLoop":true} /-->

						<!-- wp:woocommerce/product-stock-indicator {"isDescendentOfQueryLoop":true,"fontSize":"medium"} /-->

						<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"medium","style":{"typography":{"textTransform":"uppercase"}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
