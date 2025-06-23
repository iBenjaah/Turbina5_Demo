<?php
/**
 *
 * Register custom template part areas.
 *
 * @package Eternal
 */

/**
 * Register template part areas.
 */
if ( ! function_exists( 'eternal_template_part_areas' ) ) {
	function eternal_template_part_areas( array $areas ) {
		$custom_areas = array(
			array(
				'area'        => 'comments',
				'area_tag'    => 'section',
				'label'       => __( 'Comments', 'eternal' ),
				'description' => __( 'The comments template part area, typically found in the single post template.', 'eternal' ),
				'icon'        => ''
			),
			array(
				'area'        => 'sidebar',
				'area_tag'    => 'section',
				'label'       => __( 'Sidebar', 'eternal' ),
				'description' => __( 'The sidebar template part area.', 'eternal' ),
				'icon'        => 'sidebar'
			),
			array(
				'area'        => 'products',
				'area_tag'    => 'section',
				'label'       => __( 'Products', 'eternal' ),
				'description' => __( 'The products template part area, typically found in the product archive templates.', 'eternal' ),
				'icon'        => ''
			)
		);
		return array_merge( $areas, $custom_areas );
	}
}
add_filter( 'default_wp_template_part_areas', 'eternal_template_part_areas' );
