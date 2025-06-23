<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @package Eternal
 */

/**
 * Array of block styles.
 */
if ( ! function_exists( 'eternal_block_styles' ) ) {
	function eternal_block_styles() {
		return array(
			'gradient-text-1' => array(
				'label' => __( 'Gradient text 1', 'eternal' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'gradient-text-2' => array(
				'label' => __( 'Gradient text 2', 'eternal' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'gradient-text-3' => array(
				'label' => __( 'Gradient text 3', 'eternal' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'gradient-text-4' => array(
				'label' => __( 'Gradient text 4', 'eternal' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'links-plain' => array(
				'label' => __( 'Links - plain', 'eternal' ),
				'blocks' => 'paragraph,heading,site-title,post-title,post-author,post-author-name,post-author-biography,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers,comment-template,comments-pagination,latest-posts,latest-comments,categories,tag-cloud,calendar'
			),
			'links-underline-on-hover' => array(
				'label' => __( 'Links - underline on hover', 'eternal' ),
				'blocks' => 'paragraph,heading,site-title,post-title,post-author,post-author-name,post-author-biography,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers,comment-template,comments-pagination,latest-posts,latest-comments,categories,tag-cloud,calendar'
			),
			'dotted' => array(
				'label' => __( 'Dotted', 'eternal' ),
				'blocks' => 'separator'
			),
			'dotted-medium' => array(
				'label' => __( 'Dotted (medium)', 'eternal' ),
				'blocks' => 'separator'
			),
			'dotted-large' => array(
				'label' => __( 'Dotted (large)', 'eternal' ),
				'blocks' => 'separator'
			),
			'dashed' => array(
				'label' => __( 'Dashed', 'eternal' ),
				'blocks' => 'separator'
			),
			'fading' => array(
				'label' => __( 'Fading', 'eternal' ),
				'blocks' => 'separator'
			),
			'inline' => array(
				'label' => __( 'Inline', 'eternal' ),
				'blocks' => 'list,categories,page-list'
			),
			'circle' => array(
				'label' => __( 'Circle', 'eternal' ),
				'blocks' => 'list,list-item,button,query-pagination-numbers'
			),
			'disc' => array(
				'label' => __( 'Disc', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'line' => array(
				'label' => __( 'Line', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'check' => array(
				'label' => __( 'Check', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'cross' => array(
				'label' => __( 'Cross', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'star' => array(
				'label' => __( 'Star', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'arrow' => array(
				'label' => __( 'Arrow', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'chevron' => array(
				'label' => __( 'Chevron', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'counter' => array(
				'label' => __( 'Counter', 'eternal' ),
				'blocks' => 'list'
			),
			'none' => array(
				'label' => __( 'No Style', 'eternal' ),
				'blocks' => 'list,list-item'
			),
			'stripes-no-border' => array(
				'label' => __( 'Stripes with no border', 'eternal' ),
				'blocks' => 'table'
			),
			'rounded-small' => array(
				'label' => __( 'Rounded - small', 'eternal' ),
				'blocks' => 'post-comments-form'
			),
			'rounded-medium' => array(
				'label' => __( 'Rounded - medium', 'eternal' ),
				'blocks' => 'post-comments-form'
			),
			'rounded-large' => array(
				'label' => __( 'Rounded - large', 'eternal' ),
				'blocks' => 'post-comments-form'
			),
			'circle-align-top' => array(
				'label' => __( 'Circle - top align', 'eternal' ),
				'blocks' => 'group'
			),
			'circle-align-middle' => array(
				'label' => __( 'Circle - middle align', 'eternal' ),
				'blocks' => 'group'
			),
			'circle-align-bottom' => array(
				'label' => __( 'Circle - bottom align', 'eternal' ),
				'blocks' => 'group'
			),
			'circle-current' => array(
				'label' => __( 'Circle on Current', 'eternal' ),
				'blocks' => 'query-pagination-numbers'
			),
			'button' => array(
				'label' => __( 'Button', 'eternal' ),
				'blocks' => 'query-pagination-previous,query-pagination-next'
			),
			'no-border' => array(
				'label' => __( 'No Border', 'eternal' ),
				'blocks' => 'search'
			),
			'last-child-hover' => array(
				'label' => __( 'Last child Group visible on hover', 'eternal' ),
				'blocks' => 'group'
			),
			'last-child-hover-no-editor' => array(
				'label' => __( 'Last child Group visible on hover (not in Editor)', 'eternal' ),
				'blocks' => 'group'
			),
			'shift-left-small' => array(
				'label' => __( 'Shift Left (small)', 'eternal' ),
				'blocks' => 'group'
			),
			'shift-right-small' => array(
				'label' => __( 'Shift Right (small)', 'eternal' ),
				'blocks' => 'group'
			),
			'shift-left-medium' => array(
				'label' => __( 'Shift Left (medium)', 'eternal' ),
				'blocks' => 'group'
			),
			'shift-right-medium' => array(
				'label' => __( 'Shift Right (medium)', 'eternal' ),
				'blocks' => 'group'
			),
			'shift-left-large' => array(
				'label' => __( 'Shift Left (large)', 'eternal' ),
				'blocks' => 'group'
			),
			'shift-right-large' => array(
				'label' => __( 'Shift Right (large)', 'eternal' ),
				'blocks' => 'group'
			)
		);
	}
}

/**
 * Register the block styles.
 */
if ( ! function_exists( 'eternal_register_block_styles' ) ) {
	function eternal_register_block_styles() {
		$block_styles = eternal_block_styles();
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
					$block = 'core/' . $block;
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
add_action( 'init', 'eternal_register_block_styles' );

/**
 * Enqueue the block styles.
 */
if ( ! function_exists( 'eternal_enqueue_block_styles' ) ) {
	function eternal_enqueue_block_styles() {
		$files = glob( ETERNAL_TEMPLATE_DIR . '/assets/block-styles/core/*.min.css' );
		foreach ( $files as $file ) {
			$filename = basename( $file, '.min.css' );
			wp_enqueue_block_style(
				'core/' . $filename,
				array(
					'handle' => 'eternal-wp-block-' . $filename,
					'src' => get_theme_file_uri( 'assets/block-styles/core/' . $filename . '.min.css' ),
					'path' => get_theme_file_path( 'assets/block-styles/core/' . $filename . '.min.css' ),
					'ver' => ETERNAL_VERSION
				)
			);
		}
	}
}
add_action( 'init', 'eternal_enqueue_block_styles' );

/**
 * Non-core block styles.
 */
require ETERNAL_TEMPLATE_DIR . '/inc/block-styles-non-core.php';
