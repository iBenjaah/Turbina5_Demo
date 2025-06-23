<?php

/**
 * Enqueue admin scripts and styles.
 */
function eternal_admin_scripts_styles() {
	wp_enqueue_style( 'eternal-admin-style', ETERNAL_TEMPLATE_DIR_URI . '/assets/css/admin.css', array(), ETERNAL_VERSION );
	wp_enqueue_script( 'eternal-admin-script', ETERNAL_TEMPLATE_DIR_URI . '/assets/js/admin.js', array( 'wp-api-fetch' ), ETERNAL_VERSION, true );
	wp_localize_script( 'eternal-admin-script', 'eternal_text_strings',
		array(
			'eternal_string_installing' => esc_html__( 'Installing...', 'eternal' ),
			'eternal_string_activating' => esc_html__( 'Activating...', 'eternal' ),
		)
	);
	wp_add_inline_script( 'eternal-admin-script', 'var eternal_vars = ' . json_encode( array(
			'eternal_nonce' => wp_create_nonce( 'eternal-nonce' ),
			'eternal_starter_sites_page' => esc_url( eternal_starter_sites_admin_link() )
		) ), 'before'
	);
}
add_action( 'admin_enqueue_scripts', 'eternal_admin_scripts_styles' );

/**
 * Add theme notice action.
 */
function eternal_admin_notice() {
	$notice_dismissed = get_user_meta( get_current_user_id(), 'eternal_admin_notice_dismiss', true );
	if ( '1' !== $notice_dismissed ) {
		eternal_admin_notice_html();
	}
}
add_action( 'admin_notices', 'eternal_admin_notice' );

/**
 * Dismiss theme notice.
 */
function eternal_admin_notice_dismiss() {
	check_ajax_referer( 'eternal-nonce', 'eternal-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}
	update_user_meta( get_current_user_id(), 'eternal_admin_notice_dismiss', 1 );
	wp_die( 1 );
}
add_action( 'wp_ajax_eternal_admin_notice_dismiss', 'eternal_admin_notice_dismiss' );

/**
 * Print theme notice.
 */
function eternal_admin_notice_html() {
	$screen = get_current_screen();
	if ( ! empty( $screen->base ) && ( 'appearance_page_eternal' === $screen->base || str_contains($screen->base, 'starter-sites') ) ) {
		return false;
	}
	if ( eternal_is_child_theme() ) {
		$is_child_theme = true;
		$starter_sites_button = __( 'Demo Site', 'eternal' );
		$image_src = wp_get_theme()->get_screenshot();
		$image_style = 'width:300px;max-width:300px;margin:20px 0;border-radius:3px;aspect-ratio:16/9;object-fit:cover;object-position:top;';
	} else {
		$is_child_theme = false;
		$starter_sites_button = __( 'Starter Sites', 'eternal' );
		$image_src = ETERNAL_TEMPLATE_DIR_URI . '/assets/images/preview-starter-sites.png?ver=' . ETERNAL_VERSION;
		$image_style = 'max-width:300px;';
	}
	$plugin_active = is_plugin_active( 'starter-sites/starter-sites.php' );
	$starter_sites_link = eternal_starter_sites_admin_link();
	if ( eternal_is_starter_sites_pro() ) {
		$plugin_active = true;
		$starter_sites_link = $starter_sites_link . '-pro';
	}
	if ( $plugin_active ) {
		$button_link = $starter_sites_link;
	} else {
		$button_link = admin_url( 'themes.php?page=eternal' );
	}
	?>
	<div class="notice notice-info is-dismissible eternal-admin-notice">
		<div class="eternal-admin-notice-wrapper">
			<div class="eternal-page-inner-section is-style-flex">
				<div class="eternal-page-description">
					<h2><?php
					printf(
						/* Translators: %s = theme name */
						esc_html__( 'Welcome to the %s theme.', 'eternal' ),
						eternal_theme_name()
					); ?></h2>
					<p><?php echo esc_html( eternal_theme_description() ); ?></p>
					<p><?php
					printf(
						/* Translators: %s = link to homepage design help section of theme page */
						esc_html__( 'Check out the theme page for help changing the %s.', 'eternal' ),
						'<a href="' . esc_url( admin_url( 'themes.php?page=eternal#homepage' ) ) . '">' . __( 'homepage design', 'eternal' ) . '</a>'
					); ?></p>
					<p><?php
					if ( $is_child_theme ) {
						printf(
							/* Translators: %s = link to theme page, or starter sites plugin page if active */
							esc_html__( 'Import the %s available right now for your new website.', 'eternal' ),
							'<a class="is-help-button" href="' . esc_url( $button_link ) . '">' . $starter_sites_button . '</a>'
						);
					} else {
						printf(
							/* Translators: %s = link to theme page, or starter sites plugin page if active */
							esc_html__( 'Explore ready to go %s available right now for your new website.', 'eternal' ),
							'<a class="is-help-button" href="' . esc_url( $button_link ) . '">' . $starter_sites_button . '</a>'
						);
					}
					?></p>
				</div>
				<div class="eternal-page-image">
					<a href="<?php echo esc_url( $button_link ) ?>"><img style="<?php echo esc_attr( $image_style ) ;?>" src="<?php echo esc_url( $image_src ) ;?>"/></a>
				</div>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Theme page in Appearance menu.
 */
function eternal_appearance_menu() {
	add_theme_page(
		esc_html__( 'Theme Help', 'eternal' ),
		esc_html__( 'Theme Help', 'eternal' ),
		'edit_theme_options',
		'eternal',
		'eternal_theme_page_html'
	);
}
add_action( 'admin_menu', 'eternal_appearance_menu' );

/**
 * Theme page.
 */
function eternal_theme_page_html() {
	$plugin_installed = file_exists( WP_PLUGIN_DIR. '/starter-sites' );
	$plugin_active = is_plugin_active( 'starter-sites/starter-sites.php' );
	$page_title = __( 'Starter Sites', 'eternal' );
	$starter_sites_link = eternal_starter_sites_admin_link();
	if ( eternal_is_starter_sites_pro() ) {
		$plugin_active = true;
		$page_title = __( 'Starter Sites Pro', 'eternal' );
		$starter_sites_link = $starter_sites_link . '-pro';
	}

	if ( eternal_is_child_theme() ) {
		$page_title = __( 'Demo Site', 'eternal' );
		$image_src = wp_get_theme()->get_screenshot();
		$image_style = 'width:600px;border-radius:3px;aspect-ratio:16/9;object-fit:cover;object-position:top;';
	} else {
		$image_src = ETERNAL_TEMPLATE_DIR_URI . '/assets/images/preview-starter-sites.png?ver=' . ETERNAL_VERSION;
		$image_style = '';
	}



	?>
	<div class="eternal-page-wrapper">
		<div class="eternal-page-content">
			<div class="eternal-page-header">
				<h1 class="eternal-page-theme-name"><?php echo esc_html( eternal_theme_name() ); ?></h1>
				<p><?php echo esc_html( eternal_theme_description() ); ?></p>
			</div>
			<div class="eternal-page-inner-section is-style-flex">
				<div class="eternal-page-description">
					<h2><?php echo esc_html( $page_title ); ?></h2>
					<?php

					$demo_link = eternal_demo_link();
					if ( $demo_link !== '' ) {
						?>
						<p style="font-size:15px;"><a href="<?php echo esc_url( $demo_link ); ?>" target="_blank"><?php esc_html_e( 'Preview the theme demo', 'eternal' ); ?><svg style="vertical-align:text-bottom;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false"><path d="M19.5 4.5h-7V6h4.44l-5.97 5.97 1.06 1.06L18 7.06v4.44h1.5v-7Zm-13 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3H17v3a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h3V5.5h-3Z"></path></svg></a></p>
						<?php
					}

					if ( !$plugin_installed ) {
						?>
						<p><?php esc_html_e( 'Install the Starter Sites plugin and choose from our handpicked collection of demo websites.', 'eternal' ); ?></p>
						<p><?php esc_html_e( 'Each starter site is designed to integrate perfectly with the theme.', 'eternal' ); ?></p>
						<p><button class="button button-primary eternal-install-plugin"><?php esc_html_e( 'Install Plugin', 'eternal' ) ;?></button></p>
						<?php
					} elseif ( $plugin_installed && !$plugin_active ) {
						?>
						<p><?php esc_html_e( 'Activate the Starter Sites plugin and choose from our handpicked collection of demo websites.', 'eternal' ); ?></p>
						<p><?php esc_html_e( 'Each starter site is designed to integrate perfectly with the theme.', 'eternal' ); ?></p>
						<p><button class="button button-primary eternal-activate-plugin"><?php esc_html_e( 'Activate Plugin', 'eternal' ) ;?></button></p>
						<?php
					} else {
						?>
						<p><?php esc_html_e( 'Each starter site is designed to integrate perfectly with the theme.', 'eternal' ); ?></p>
						<p><a href="<?php echo esc_url( $starter_sites_link ) ?>" class="button button-primary"><?php esc_html_e( 'Browse Sites', 'eternal' ) ;?></a></p>
						<?php
					}
					?>
				</div>
				<div class="eternal-page-image">
				<?php
				if ( $plugin_active ) {
					?>
					<a href="<?php echo esc_url( $starter_sites_link ) ?>"><img style="<?php echo esc_attr( $image_style ); ?>" src="<?php echo esc_url( $image_src ) ;?>"/></a>
					<?php
				} else {
					?>
					<img style="<?php echo esc_attr( $image_style ); ?>" src="<?php echo esc_url( $image_src ) ;?>"/>
					<?php
				}
				?>
				</div>
			</div>
			<div class="eternal-page-inner-section is-style-flex">
				<div class="eternal-page-description">
					<h2 id="homepage"><?php esc_html_e( 'Quick Home Page Setup', 'eternal' ); ?></h2>
						<p><?php esc_html_e( 'The Front Page template is used to display the home page of your new website.', 'eternal' ); ?></p>
						<p><?php esc_html_e( 'You can edit it directly and change the content, layout and design.', 'eternal' ); ?></p>
						<p><?php esc_html_e( 'The theme provides a variety of designs you can use to quickly change how your home page is presented.', 'eternal' ); ?></p>
						<p><?php esc_html_e( 'A static home page is the default design, however if you prefer a more traditional blog home page, you can change this by editing the Front Page template and selecting Home Blog in the Design area.', 'eternal' ); ?></p>
						<p><?php esc_html_e( 'Alternatively, if you prefer to display the content from the page selected as your homepage in Settings > Reading, you can select the "Homepage (page content)" design.', 'eternal' ); ?></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?postId=eternal//front-page&postType=wp_template&canvas=edit' ) ) ?>" class="button button-primary"><?php esc_html_e( 'Edit Front Page', 'eternal' ) ;?></a></p>
				</div>
				<div class="eternal-page-gallery-items">
					<img class="gallery-item" data-gallery-id="front-page-default" src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-default.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
					<img class="gallery-item" data-gallery-id="front-page-ecommerce" src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-ecommerce.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
					<img class="gallery-item" data-gallery-id="front-page-contractor" src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-contractor.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
					<img class="gallery-item" data-gallery-id="front-page-interior-designer" src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-interior-designer.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
					<img class="gallery-item" data-gallery-id="front-page-auto-center" src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-auto-center.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
					<img class="gallery-item" data-gallery-id="front-page-blog-selected" src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-blog.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
				</div>
			</div>
			<div class="eternal-page-inner-section is-style-flex is-section-links">
				<div class="eternal-page-inner-left">
					<h2><?php esc_html_e( 'Quick Editor Links', 'eternal' ); ?></h2>
					<div class="eternal-editor-link">
						<p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 4L4 7.9V20h16V7.9L12 4zm6.5 14.5H14V13h-4v5.5H5.5V8.8L12 5.7l6.5 3.1v9.7z"></path></svg></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ) ?>"><?php esc_html_e( 'Site', 'eternal' ) ;?></a></p>
					</div>
					<div class="eternal-editor-link">
						<p><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 4c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14.5c-3.6 0-6.5-2.9-6.5-6.5S8.4 5.5 12 5.5s6.5 2.9 6.5 6.5-2.9 6.5-6.5 6.5zM9 16l4.5-3L15 8.4l-4.5 3L9 16z"></path></svg></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_navigation' ) ) ?>"><?php esc_html_e( 'Navigation Menus', 'eternal' ) ;?></a></p>
					</div>
					<div class="eternal-editor-link">
						<p><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 4c-4.4 0-8 3.6-8 8v.1c0 4.1 3.2 7.5 7.2 7.9h.8c4.4 0 8-3.6 8-8s-3.6-8-8-8zm0 15V5c3.9 0 7 3.1 7 7s-3.1 7-7 7z"></path></svg></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?path=/wp_global_styles' ) ) ?>"><?php esc_html_e( 'Styles', 'eternal' ) ;?></a></p>
					</div>
					<div class="eternal-editor-link">
						<p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M18 5.5H6a.5.5 0 00-.5.5v3h13V6a.5.5 0 00-.5-.5zm.5 5H10v8h8a.5.5 0 00.5-.5v-7.5zm-10 0h-3V18a.5.5 0 00.5.5h2.5v-8zM6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"></path></svg></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ) ?>"><?php esc_html_e( 'Templates', 'eternal' ) ;?></a></p>
					</div>
					<div class="eternal-editor-link">
						<p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M21.3 10.8l-5.6-5.6c-.7-.7-1.8-.7-2.5 0l-5.6 5.6c-.7.7-.7 1.8 0 2.5l5.6 5.6c.3.3.8.5 1.2.5s.9-.2 1.2-.5l5.6-5.6c.8-.7.8-1.9.1-2.5zm-17.6 1L10 5.5l-1-1-6.3 6.3c-.7.7-.7 1.8 0 2.5L9 19.5l1.1-1.1-6.3-6.3c-.2 0-.2-.2-.1-.3z"></path></svg></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ) ?>"><?php esc_html_e( 'Template Parts', 'eternal' ) ;?></a></p>
					</div>
					<div class="eternal-editor-link">
						<p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M21.3 10.8l-5.6-5.6c-.7-.7-1.8-.7-2.5 0l-5.6 5.6c-.7.7-.7 1.8 0 2.5l5.6 5.6c.3.3.8.5 1.2.5s.9-.2 1.2-.5l5.6-5.6c.8-.7.8-1.9.1-2.5zm-1 1.4l-5.6 5.6c-.1.1-.3.1-.4 0l-5.6-5.6c-.1-.1-.1-.3 0-.4l5.6-5.6s.1-.1.2-.1.1 0 .2.1l5.6 5.6c.1.1.1.3 0 .4zm-16.6-.4L10 5.5l-1-1-6.3 6.3c-.7.7-.7 1.8 0 2.5L9 19.5l1.1-1.1-6.3-6.3c-.2 0-.2-.2-.1-.3z"></path></svg></p>
						<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_block' ) ) ?>"><?php esc_html_e( 'Patterns', 'eternal' ) ;?></a></p>
					</div>
				</div>
				<div class="eternal-page-inner-right">
					<h2><?php esc_html_e( 'Theme Links', 'eternal' ); ?></h2>
					<div class="eternal-editor-link">
						<p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M19.5 4.5h-7V6h4.44l-5.97 5.97 1.06 1.06L18 7.06v4.44h1.5v-7Zm-13 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3H17v3a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h3V5.5h-3Z"></path></svg></p>
						<p><a target="_blank" href="<?php echo esc_url( 'https://wordpress.org/support/theme/' . get_option( 'stylesheet' ) . '/' ); ?>"><?php esc_html_e( 'Support', 'eternal' ) ;?></a></p>
					</div>
					<div class="eternal-editor-link">
						<p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M19.5 4.5h-7V6h4.44l-5.97 5.97 1.06 1.06L18 7.06v4.44h1.5v-7Zm-13 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3H17v3a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h3V5.5h-3Z"></path></svg></p>
						<p><a target="_blank" href="https://wpstartersites.com/#browse-sites"><?php esc_html_e( 'Demos', 'eternal' ) ;?></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="eternal-page-gallery help-front-page">
			<div class="is-gallery-item is-front-page-item gallery-id-front-page-default" data-gallery-id="front-page-default">
				<div class="gallery-head">
					<div class="gallery-prev-next">
						<button class="gallery-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg></button>
						<button class="gallery-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M10.6 6L9.4 7l4.6 5-4.6 5 1.2 1 5.4-6z"></path></svg></button>
					</div>
					<p><?php esc_html_e( 'Front Page template: the default Home Page design.', 'eternal' ); ?></p>
					<button class="gallery-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"></path></svg></button>
				</div>
				<img src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-default.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
			</div>

			<div class="is-gallery-item is-front-page-item gallery-id-front-page-ecommerce" data-gallery-id="front-page-ecommerce">
				<div class="gallery-head">
					<div class="gallery-prev-next">
						<button class="gallery-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg></button>
						<button class="gallery-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M10.6 6L9.4 7l4.6 5-4.6 5 1.2 1 5.4-6z"></path></svg></button>
					</div>
					<p><?php esc_html_e( 'Front Page template: the ecommerce Home Page design.', 'eternal' ); ?></p>
					<button class="gallery-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"></path></svg></button>
				</div>
				<img src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-ecommerce.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
			</div>

			<div class="is-gallery-item is-front-page-item gallery-id-front-page-contractor" data-gallery-id="front-page-contractor">
				<div class="gallery-head">
					<div class="gallery-prev-next">
						<button class="gallery-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg></button>
						<button class="gallery-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M10.6 6L9.4 7l4.6 5-4.6 5 1.2 1 5.4-6z"></path></svg></button>
					</div>
					<p><?php esc_html_e( 'Front Page template: the contractor Home Page design.', 'eternal' ); ?></p>
					<button class="gallery-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"></path></svg></button>
				</div>
				<img src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-contractor.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
			</div>

			<div class="is-gallery-item is-front-page-item gallery-id-front-page-interior-designer" data-gallery-id="front-page-interior-designer">
				<div class="gallery-head">
					<div class="gallery-prev-next">
						<button class="gallery-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg></button>
						<button class="gallery-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M10.6 6L9.4 7l4.6 5-4.6 5 1.2 1 5.4-6z"></path></svg></button>
					</div>
					<p><?php esc_html_e( 'Front Page template: the interior designer Home Page design.', 'eternal' ); ?></p>
					<button class="gallery-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"></path></svg></button>
				</div>
				<img src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-interior-designer.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
			</div>

			<div class="is-gallery-item is-front-page-item gallery-id-front-page-auto-center" data-gallery-id="front-page-auto-center">
				<div class="gallery-head">
					<div class="gallery-prev-next">
						<button class="gallery-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg></button>
						<button class="gallery-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M10.6 6L9.4 7l4.6 5-4.6 5 1.2 1 5.4-6z"></path></svg></button>
					</div>
					<p><?php esc_html_e( 'Front Page template: the auto center Home Page design.', 'eternal' ); ?></p>
					<button class="gallery-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"></path></svg></button>
				</div>
				<img src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-auto-center.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
			</div>

			<div class="is-gallery-item is-front-page-item gallery-id-front-page-blog-selected" data-gallery-id="front-page-blog-selected">
				<div class="gallery-head">
					<div class="gallery-prev-next">
						<button class="gallery-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg></button>
						<button class="gallery-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M10.6 6L9.4 7l4.6 5-4.6 5 1.2 1 5.4-6z"></path></svg></button>
					</div>
					<p><?php esc_html_e( 'Front Page template: changed to display the Home Blog design.', 'eternal' ); ?></p>
					<button class="gallery-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"></path></svg></button>
				</div>
				<img src="<?php echo esc_url( ETERNAL_TEMPLATE_DIR_URI . '/assets/images/help-front-page-blog.jpg?ver=' . ETERNAL_VERSION ) ;?>"/>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Returns link to the Starter Sites plugin page.
 */
function eternal_starter_sites_admin_link() {
	$settings = get_option( 'starter_sites_settings' );
	if ( isset($settings['is_minimal']) && 'yes' === $settings['is_minimal'] ) {
		$link = 'options-general.php';
	} elseif ( isset($settings['menu_location']) ) {
		if ( 'appearance' === $settings['menu_location'] ) {
			$link = 'themes.php';
		} elseif ( 'tools' === $settings['menu_location'] ) {
			$link = 'tools.php';
		} else {
			$link = 'admin.php';
		}
	} else {
		$link = 'admin.php';
	}
	return admin_url( $link . '?page=starter-sites' );
}

/**
 * Is Starter Sites Pro active?
 * Returns true or false.
 */
function eternal_is_starter_sites_pro() {
	if ( class_exists('Starter_Sites_Pro') ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Is a child theme active?
 * Returns true or false.
 */
function eternal_is_child_theme() {
	$theme = wp_get_theme();
	$stylesheet = $theme->stylesheet;
	$template = $theme->template;
	if ( $stylesheet !== $template ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Returns active theme name.
 */
function eternal_theme_name() {
	return wp_get_theme()->get( 'Name' );
}

/**
 * Returns a short theme description.
 */
function eternal_theme_description() {
	if ( eternal_is_child_theme() ) {
		return __( 'An Eternal child theme.', 'eternal' );
	} else {
		return __( 'One theme. Endless possibilities.', 'eternal' );
	}
}

/**
 * Returns link to theme demo.
 * Empty string if not available.
 */
function eternal_demo_link() {
	$readme = get_file_data( get_stylesheet_directory() . '/readme.txt', array(
		'starter_site' => 'Starter Site'
	) );
	if ( isset( $readme['starter_site'] ) && $readme['starter_site'] !== '' ) {
		$demo_dir = $readme['starter_site'];
		$link = 'https://demo.wpstartersites.com/' . $demo_dir . '/';
	} else {
		$link = '';
	}
	return $link;
}
