<?php
/**
 * Title: Sidebar
 * Slug: eternal/part-sidebar
 * Categories: eternal_parts
 * Template Types: sidebar
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar Group"},"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Search"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"24px"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Latest Posts"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-contrast-3-color has-text-color has-link-color">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Latest Posts</h3>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"className":"is-style-links-underline-on-hover"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Latest Comments"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-contrast-3-color has-text-color has-link-color">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Latest Comments</h3>
		<!-- /wp:heading -->

		<!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"className":"is-style-links-underline-on-hover"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Popular Categories"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-contrast-3-color has-text-color has-link-color">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Popular Categories</h3>
		<!-- /wp:heading -->

		<!-- wp:categories {"showPostCounts":true,"className":"is-style-links-underline-on-hover"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Popular Tags"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"contrast-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-contrast-3-color has-text-color has-link-color">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Popular Tags</h3>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud {"className":"is-style-links-underline-on-hover"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Calendar"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"contrast-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-contrast-3-color has-text-color has-link-color">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Calendar</h3>
		<!-- /wp:heading -->

		<!-- wp:calendar {"className":"is-style-links-underline-on-hover"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
