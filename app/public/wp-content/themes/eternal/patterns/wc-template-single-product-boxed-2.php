<?php
/**
 * Title: Single Product - Boxed Style 2
 * Slug: eternal/wc-template-single-product-boxed-2
 * Categories: eternal_templates
 * Template Types: single-product
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:woocommerce/breadcrumbs {"className":"is-style-links-underline-on-hover"} /-->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:woocommerce/product-image-gallery {"className":"is-style-fill-container"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"},"color":{"background":"var:preset|color|accent-1-transparent"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--accent-1-transparent);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

				<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"large"} /-->

				<!-- wp:post-excerpt {"excerptLength":100,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

				<!-- wp:woocommerce/add-to-cart-form /-->

				<!-- wp:woocommerce/product-meta -->
				<div class="wp-block-woocommerce-product-meta">
					<!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true} /-->

					<!-- wp:post-terms {"term":"product_cat","prefix":"Category: ","className":"is-style-links-underline-on-hover"} /-->

					<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: ","className":"is-style-links-underline-on-hover"} /-->
				</div>
				<!-- /wp:woocommerce/product-meta -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"borderColor":"base-3","layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-base-3-border-color" style="border-width:1px;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:woocommerce/product-details {"className":"is-style-minimal"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:woocommerce/related-products {"align":"wide"} -->
	<div class="wp-block-woocommerce-related-products alignwide">
		<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
		<div class="wp-block-query">
			<!-- wp:pattern {"slug":"eternal/wc-hidden-related-products-heading"} /-->

			<!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"},"border":{"width":"1px"}},"borderColor":"base-3","layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-base-3-border-color" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"className":"is-style-links-underline-on-hover","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:woocommerce/related-products -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->