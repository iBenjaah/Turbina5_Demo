<?php
/**
 * Title: Header with Top Bar and Contacts
 * Slug: eternal/part-header-top-bar-contacts
 * Categories: eternal_parts
 * Block Types: core/template-part/header
 * Template Types: header
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color has-small-font-size">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)">
				<!-- wp:image {"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#2d59f2","#ffffff"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-phone.png') ); ?>" alt="" style="width:25px" /></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph -->
				<p>555-456-7890</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)">
				<!-- wp:image {"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#2d59f2","#ffffff"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri('assets/images/icon-email.png') ); ?>" alt="" style="width:25px" /></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph -->
				<p>mail@example.com</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"accent-1","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
			<div class="wp-block-button has-custom-font-size has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Get In Touch ⭢</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
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
