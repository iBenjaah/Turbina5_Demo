<?php
define( 'ETERNAL_VERSION', eternal_version() );
define( 'ETERNAL_TEMPLATE_DIR', get_template_directory() );
define( 'ETERNAL_TEMPLATE_DIR_URI', get_template_directory_uri() );

function eternal_version() {
	if ( wp_is_development_mode( 'theme' ) ) {
		return time();
	} else {
		return wp_get_theme()->get( 'Version' );
	}
}

if ( ! function_exists( 'eternal_support' ) ) {
	function eternal_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'eternal', ETERNAL_TEMPLATE_DIR . '/languages' );
		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'eternal_support' );

/**
 * Block styles.
 */
require ETERNAL_TEMPLATE_DIR . '/inc/block-styles.php';

/**
 * Block patterns.
 */
require ETERNAL_TEMPLATE_DIR . '/inc/block-patterns.php';

/**
 * Template parts areas.
 */
require ETERNAL_TEMPLATE_DIR . '/inc/template-part-areas.php';

/**
 * Theme help page.
 */
require ETERNAL_TEMPLATE_DIR . '/inc/theme-page.php';

/**
 * Filter templates & template parts.
 */
if ( ! function_exists( 'eternal_filter_templates' ) ) {
	function eternal_filter_templates( $templates, $query, $template_type ) {
		if ( !class_exists( 'WooCommerce' ) ) {
			if ( $template_type === 'wp_template_part' ) {
				$wc_templates = array(
					'products'
				);
			} else {
				$wc_templates = array(
					'archive-product',
					'coming-soon',
					'order-confirmation',
					'page-cart',
					'page-checkout',
					'product-search-results',
					'single-product',
					'taxonomy-product_attribute',
					'taxonomy-product_cat',
					'taxonomy-product_tag'
				);
			}
			foreach ( $templates as $key => $template ) {
				$slug = $template->slug;
				if ( in_array( $slug, $wc_templates ) ) {
					unset( $templates[$key] );
				}
			}
		}
		return $templates;
	}
}
add_filter( 'get_block_templates', 'eternal_filter_templates', 10, 3 );

/**
 * Filter patterns.
 */
if ( ! function_exists( 'eternal_filter_patterns' ) ) {
	function eternal_filter_patterns() {
		if ( !class_exists( 'WooCommerce' ) ) {
			$patterns = WP_Block_Patterns_Registry::get_instance()->get_all_registered();
			foreach ( $patterns as $pattern ) {
				if ( str_starts_with( $pattern['name'], 'eternal/wc-' ) ) {
					unregister_block_pattern( $pattern['name'] );
				}
			}
		}
	}
}
add_action( 'init', 'eternal_filter_patterns' );
