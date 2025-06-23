<?php
/**
 *
 * Adds custom non-core Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @package Eternal
 */

/**
 * Array of WooCommerce block styles.
 */
if ( ! function_exists( 'eternal_block_styles_woocommerce' ) ) {
	function eternal_block_styles_woocommerce() {
		return array(
			'links-plain' => array(
				'label' => __( 'Links - plain', 'eternal' ),
				'blocks' => 'product-title,breadcrumbs'
			),
			'links-underline-on-hover' => array(
				'label' => __( 'Links - underline on hover', 'eternal' ),
				'blocks' => 'product-title,breadcrumbs'
			),
			'buttoned' => array(
				'label' => __( 'Buttoned', 'eternal' ),
				'blocks' => 'breadcrumbs'
			),
			'icon-auto' => array(
				'label' => __( 'Icon', 'eternal' ),
				'blocks' => 'product-button'
			),
			'fill-container' => array(
				'label' => __( 'Fill Width of Parent Container', 'eternal' ),
				'blocks' => 'product-image-gallery'
			),
			'gallery-image-on-hover' => array(
				'label' => __( 'Show 1st gallery image on hover', 'eternal' ),
				'blocks' => 'product-image'
			),
		);
	}
}

/**
 * Register the WooCommerce block styles.
 */
if ( ! function_exists( 'eternal_register_block_styles_woocommerce' ) ) {
	function eternal_register_block_styles_woocommerce() {
		$block_styles = eternal_block_styles_woocommerce();
		foreach ( $block_styles as $block_style => $attrs ) {
			if ( isset($attrs['label']) && $attrs['label'] !== '' ) {
				$label = $attrs['label'];
			} else {
				$label = $block_style;
			}
			if ( isset($attrs['handle']) && $attrs['handle'] !== '' ) {
				$handle = $attrs['handle'];
			} else {
				$handle = 'eternal-style';
			}
			if ( isset($attrs['style']) && $attrs['style'] !== '' ) {
				$style = $attrs['style'];
			} else {
				$style = '';
			}
			$blocks = explode( ',', $attrs['blocks'] );
			$block_count = 0;
			foreach ( $blocks as $block ) {
				$block_count++;
				if ( strpos( $block, '/' ) !== false ) {
					$block = $block;
				} else {
					$block = 'woocommerce/' . $block;
				}
				if ( $block_count > 1 ) {
					$style = '';
				}
				register_block_style(
					$block,
					array(
						'name' => $block_style,
						'label'	=> $label,
						'style_handle' => $handle,
						'inline_style' => $style
					)
				);
			}
		}
	}
}

/**
 * Enqueue the WooCommerce styles.
 */
if ( ! function_exists( 'eternal_enqueue_styles_woocommerce' ) ) {
	function eternal_enqueue_styles_woocommerce() {

		$files = glob( ETERNAL_TEMPLATE_DIR . '/assets/block-styles/woocommerce/*.min.css' );
		foreach ( $files as $file ) {
			$filename = basename( $file, '.min.css' );
			wp_enqueue_block_style(
				'woocommerce/' . $filename,
				array(
					'handle' => 'eternal-wc-blocks-style-' . $filename,
					'src' => get_theme_file_uri( 'assets/block-styles/woocommerce/' . $filename . '.min.css' ),
					'path' => get_theme_file_path( 'assets/block-styles/woocommerce/' . $filename . '.min.css' ),
					'ver' => ETERNAL_VERSION
				)
			);
		}

	}
}

/**
 * Enqueue a general WooCommerce stylesheet.
 */
if ( ! function_exists( 'eternal_woocommerce_stylesheet' ) ) {
	function eternal_woocommerce_stylesheet() {
		wp_enqueue_style( 'eternal-woocommerce', ETERNAL_TEMPLATE_DIR_URI . '/assets/css/woocommerce.min.css', array(), ETERNAL_VERSION );
	}
}

/**
 * Enqueue a general WooCommerce stylesheet in the editor.
 */
if ( ! function_exists( 'eternal_woocommerce_stylesheet_editor' ) ) {
	function eternal_woocommerce_stylesheet_editor() {
		add_editor_style( ETERNAL_TEMPLATE_DIR_URI . '/assets/css/woocommerce.min.css' );
	}
}

if ( ! function_exists( 'eternal_product_extra_image' ) ) {
	function eternal_product_extra_image( $block_content, $block ) {
		$content = $block_content;
		if ( isset( $block['attrs']['className'] ) && str_contains( $block['attrs']['className'], 'is-style-gallery-image-on-hover' ) ) {
			global $product;
			$gallery_images = $product->get_gallery_image_ids();
			if ( isset( $gallery_images[0] ) ) {
				if ( isset( $block['attrs']['showProductLink'] ) && $block['attrs']['showProductLink'] !== true ) {
					$link_start = '';
					$link_end = '';
				} else {
					$link_start = '<a href="' . $product->get_permalink() . '">';
					$link_end = '</a>';
				}
				if ( isset( $block['attrs']['style'] ) ) {
					$style = wp_style_engine_get_styles( $block['attrs']['style'] );
					$image_style = $style['css'];
				} else {
					$image_style = '';
				}
				if ( isset($block['attrs']['imageSizing']) ) {
					$image_size = 'single' === $block['attrs']['imageSizing'] ? 'woocommerce_single' : 'woocommerce_thumbnail';
				} else {
					$image_size = 'full';
				}
				$content = '<div class="extra-product-image hover-gallery" style="' . esc_attr( $image_style ) . '">';
				$content .= $block_content;
				$content .= '<div class="extra-product-gallery-image">' . $link_start . wp_get_attachment_image( $gallery_images[0], $image_size, '', ['class' => 'extra-attachment-image'] ) . $link_end . '</div>';
				$content .= '</div>';
			}
		}
		return $content;
	}
}

if ( ! function_exists( 'eternal_wc_block_render' ) ) {
	function eternal_wc_block_render( $block_content, $block ) {
		if ( $block['blockName'] === 'woocommerce/product-image' ) {
			$block_content = eternal_product_extra_image( $block_content, $block );
		}
		return $block_content;
	}
}

if ( class_exists( 'WooCommerce' ) ) {
	add_action( 'init', 'eternal_register_block_styles_woocommerce' );
	add_action( 'init', 'eternal_enqueue_styles_woocommerce' );
	add_action( 'wp_enqueue_scripts', 'eternal_woocommerce_stylesheet' );
	add_action( 'after_setup_theme', 'eternal_woocommerce_stylesheet_editor' );
	add_filter( 'render_block', 'eternal_wc_block_render', 10, 2 );
}
