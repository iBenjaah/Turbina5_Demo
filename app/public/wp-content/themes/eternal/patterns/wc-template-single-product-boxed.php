<?php
/**
 * Title: Single Product - Boxed Style
 * Slug: eternal/wc-template-single-product-boxed
 * Categories: eternal_templates
 * Template Types: single-product
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:0;padding-bottom:0">
	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1px","left":"1px"},"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}}},"backgroundColor":"base-3"} -->
	<div class="wp-block-columns alignwide has-base-3-background-color has-background" style="padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px">
		<!-- wp:column {"width":"50%","backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="flex-basis:50%">
			<!-- wp:woocommerce/product-image-gallery {"className":"is-style-fill-container"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="flex-basis:50%">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:woocommerce/breadcrumbs {"className":"is-style-links-underline-on-hover"} /-->

				<!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

				<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"large"} /-->

				<!-- wp:post-excerpt {"excerptLength":100,"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

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
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"1px","left":"1px","right":"1px","top":"0px"},"blockGap":{"top":"1px","left":"1px"}}},"backgroundColor":"base-3"} -->
	<div class="wp-block-columns alignwide has-base-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:1px;padding-bottom:1px;padding-left:1px">
		<!-- wp:column {"width":"50%","backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="flex-basis:50%">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="flex-basis:50%">
			<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:woocommerce/related-products {"align":"wide"} -->
				<div class="wp-block-woocommerce-related-products alignwide">
					<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
					<div class="wp-block-query">
						<!-- wp:pattern {"slug":"eternal/wc-hidden-related-products-heading"} /-->

						<!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"},"border":{"width":"1px"}},"backgroundColor":"base-2","borderColor":"base-3","layout":{"type":"default"}} -->
						<div class="wp-block-group has-border-color has-base-3-border-color has-base-2-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
							<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

							<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}}} /-->

							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
							<div class="wp-block-group">
								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->

								<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-icon-auto","fontSize":"small"} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
						<!-- /wp:post-template -->
					</div>
					<!-- /wp:query -->
				</div>
				<!-- /wp:woocommerce/related-products -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->