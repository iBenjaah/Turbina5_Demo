<?php
/**
 * Title: Front Page
 * Slug: auto-center/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<main id="primary" class="wp-block-group" style="margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/car-repair.jpg    ","hasParallax":true,"dimRatio":50,"customOverlayColor":"#5e5e5e","isUserOverlayColor":true,"contentPosition":"center center","metadata":{"name":"Homepage Cover"},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#5e5e5e"></span><div class="wp-block-cover__image-background  has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/car-repair.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3.6rem"},"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);font-size:3.6rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Professional', 'auto-center' ); ?><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-1-color"><?php esc_html_e( 'Auto Repair', 'auto-center' ); ?></mark><?php esc_html_e( ' & Maintenance', 'auto-center' ); ?><br><?php esc_html_e( 'Services ', 'auto-center' ); ?><em><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-1-color"><?php esc_html_e( 'since 1996', 'auto-center' ); ?></mark></em></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Homepage Services"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|70"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Maintenance', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Oil Changes', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Fluid Checks & Top-ups', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Tune-Ups', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Battery Services', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Tires & Wheels', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Tire Services', 'auto-center' ); ?><br><?php esc_html_e( '(Rotation, Balancing,', 'auto-center' ); ?><br><?php esc_html_e( 'Alignment, Replacement)', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Wheel Alignment', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Brakes & Suspension', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Brake Services', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Suspension', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Steering Repairs', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Engine & Transmission', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Engine Repairs', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Diagnostics', 'auto-center' ); ?></mark><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Transmission Services', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Heating, Cooling & Exhaust', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Air Conditioning', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Heating Services', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Exhaust System Repairs', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Electrical', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Electrical System Repairs', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Engine Diagnostics', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Vehicle Inspections', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Inspection Services', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Safety', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Emissions Testing', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-links-plain","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"textColor":"base"} -->
<h3 class="wp-block-heading is-style-links-plain has-base-color has-text-color has-link-color"><?php esc_html_e( 'Glass & Windshield', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-check","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} -->
<ul class="wp-block-list is-style-check has-accent-1-color has-text-color has-link-color"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Repairs', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Replacement', 'auto-center' ); ?></mark><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"></mark></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-2-color"><?php esc_html_e( 'Auto Glass', 'auto-center' ); ?></mark></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Homepage About"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:media-text {"align":"wide","mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bmw.png","mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bmw.png" alt="" /></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'About the Auto Center', 'auto-center' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p><?php esc_html_e( 'At Auto Center, we are dedicated to providing top-quality auto repair and maintenance services to keep your vehicle running smoothly and safely. With a team of certified technicians and a commitment to customer satisfaction, we offer a wide range of services, from routine maintenance to complex repairs. Trust us to deliver reliable care and exceptional service every time.', 'auto-center' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-line"} -->
<ul class="wp-block-list is-style-line"><!-- wp:list-item -->
<li><?php esc_html_e( 'Certified and experienced technicians', 'auto-center' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Comprehensive auto repair and maintenance services', 'auto-center' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'State-of-the-art diagnostic tools and equipment', 'auto-center' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Fast, reliable service with transparent pricing', 'auto-center' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Commitment to customer satisfaction and safety', 'auto-center' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Homepage How It Works"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'How It Works', 'auto-center' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'At Auto Center, we provide complete auto repair and maintenance services.', 'auto-center' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}},"typography":{"fontStyle":"normal","fontWeight":"900"},"border":{"width":"1px"}},"textColor":"accent-1","fontSize":"xx-large"} -->
<p class="has-text-align-center has-accent-1-color has-text-color has-link-color has-xx-large-font-size" style="border-width:1px;font-style:normal;font-weight:900"><?php esc_html_e( '1', 'auto-center' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Select Your Service', 'auto-center' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}},"typography":{"fontStyle":"normal","fontWeight":"900"},"border":{"width":"1px"}},"textColor":"accent-1","fontSize":"xx-large"} -->
<p class="has-text-align-center has-accent-1-color has-text-color has-link-color has-xx-large-font-size" style="border-width:1px;font-style:normal;font-weight:900"><?php esc_html_e( '2', 'auto-center' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Schedule Your Appointment', 'auto-center' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}},"typography":{"fontStyle":"normal","fontWeight":"900"},"border":{"width":"1px"}},"textColor":"accent-1","fontSize":"xx-large"} -->
<p class="has-text-align-center has-accent-1-color has-text-color has-link-color has-xx-large-font-size" style="border-width:1px;font-style:normal;font-weight:900"><?php esc_html_e( '3', 'auto-center' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Drop Off Your Vehicle for Service', 'auto-center' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}},"typography":{"fontStyle":"normal","fontWeight":"900"},"border":{"width":"1px"}},"textColor":"accent-1","fontSize":"xx-large"} -->
<p class="has-text-align-center has-accent-1-color has-text-color has-link-color has-xx-large-font-size" style="border-width:1px;font-style:normal;font-weight:900"><?php esc_html_e( '4', 'auto-center' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Pick Up Your Car and Keys', 'auto-center' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Homepage Customer Reviews"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"backgroundColor":"accent-1","textColor":"contrast-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-2-color has-accent-1-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color"><?php esc_html_e( 'What Our Happy Customers Have To Say', 'auto-center' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-fading","backgroundColor":"contrast-3"} -->
<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-fading"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '"The team at Auto Center is fantastic! They diagnosed and fixed my car’s issue quickly, and the pricing was fair. I’ve never felt more confident in an auto shop. Highly recommend!" – ', 'auto-center' ); ?><strong><?php esc_html_e( 'Sarah L.', 'auto-center' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '"I’ve been bringing my car to Auto Center for years, and they never disappoint. The staff is knowledgeable, friendly, and always goes the extra mile to ensure I’m satisfied. Excellent service every time!" – ', 'auto-center' ); ?><strong><?php esc_html_e( 'Mike D.', 'auto-center' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '"Exceptional service from start to finish! The staff was friendly, and they explained everything clearly. My car was ready on time, and it runs better than ever. I wouldn’t go anywhere else!" – ', 'auto-center' ); ?><strong><?php esc_html_e( 'Emily W.', 'auto-center' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '"I appreciate the honesty and professionalism at Auto Center. They provided a detailed explanation of the repairs needed and completed the work faster than I expected. Great experience and top-notch service!" – ', 'auto-center' ); ?><strong><?php esc_html_e( 'John K.', 'auto-center' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Large Call to Action"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-2-background-color has-background" style="margin-top:0;padding-top:0;padding-bottom:0"><!-- wp:media-text {"align":"full","mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/car-garage.jpg","mediaType":"image","imageFill":false} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/car-garage.jpg" alt="" /></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Professional Auto Repair & Maintenance Services', 'auto-center' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-clock.png" alt="" class="" style="width:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
<p class="has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'Mon-Fri: ', 'auto-center' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color"><?php esc_html_e( '9am', 'auto-center' ); ?></mark><?php esc_html_e( ' to ', 'auto-center' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color"><?php esc_html_e( '6pm', 'auto-center' ); ?></mark><?php esc_html_e( ' | Sat: ', 'auto-center' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color"><?php esc_html_e( '9am', 'auto-center' ); ?></mark><?php esc_html_e( ' to ', 'auto-center' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color"><?php esc_html_e( '1pm', 'auto-center' ); ?></mark></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-phone.png" alt="" class="" style="width:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
<p class="has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'Call us ', 'auto-center' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-color"><strong><?php esc_html_e( '555-456-7890', 'auto-center' ); ?></strong></mark></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fede00","#fede00"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon-circle-arrow-black.png" alt="" class="" style="width:24px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><strong><?php esc_html_e( 'BOOK APPOINTMENT', 'auto-center' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->