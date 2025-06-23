<?php
/**
 *
 * Extra block pattern functionality in addition to /patterns directory.
 *
 * @package Eternal
 */

/**
 * Register pattern categories.
 */
if ( ! function_exists( 'eternal_pattern_categories' ) ) {
	function eternal_pattern_categories() {

		register_block_pattern_category(
			'eternal_images',
			array(
				'label'       => _x( 'Eternal: Images', 'Block pattern category', 'eternal' ),
				'description' => __( 'Patterns containing images.', 'eternal' ),
			)
		);

		register_block_pattern_category(
			'eternal_sections',
			array(
				'label'       => _x( 'Eternal: Content Sections', 'Block pattern category', 'eternal' ),
				'description' => __( 'Content sections that can be added to any page, post, or template.', 'eternal' ),
			)
		);

		register_block_pattern_category(
			'eternal_pages',
			array(
				'label'       => _x( 'Eternal: Pages', 'Block pattern category', 'eternal' ),
				'description' => __( 'Page designs that can be added to any template.', 'eternal' ),
			)
		);

		register_block_pattern_category(
			'eternal_parts',
			array(
				'label'       => _x( 'Eternal: Template Parts', 'Block pattern category', 'eternal' ),
				'description' => __( 'Designs for template parts such as Header, Footer, Sidebar, Comments.', 'eternal' ),
			)
		);

		register_block_pattern_category(
			'eternal_templates',
			array(
				'label'       => _x( 'Eternal: Templates', 'Block pattern category', 'eternal' ),
				'description' => __( 'Designs for templates such as Front Page, Pages, Single Posts, Archive, Index.', 'eternal' ),
			)
		);

		register_block_pattern_category(
			'eternal_products',
			array(
				'label'       => _x( 'Eternal: Products', 'Block pattern category', 'eternal' ),
				'description' => __( 'Products for use with WooCommerce plugin.', 'eternal' ),
			)
		);

	}
}
add_action( 'init', 'eternal_pattern_categories' );
