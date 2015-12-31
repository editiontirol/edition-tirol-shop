<?php
/**
 * et_shop hooks
 *
 * @package et_shop
 */

/**
 * General
 * @see  et_shop_setup()
 * @see  et_shop_widgets_init()
 * @see  et_shop_scripts()
 * @see  et_shop_header_widget_region()
 * @see  et_shop_get_sidebar()
 */
add_action( 'after_setup_theme',			'et_shop_setup' );
add_action( 'widgets_init',					'et_shop_widgets_init' );
add_action( 'wp_enqueue_scripts',			'et_shop_scripts',				10 );
add_action( 'wp_enqueue_scripts',			'et_shop_child_scripts',			30 ); // After WooCommerce
add_action( 'et_shop_before_content',	'et_shop_header_widget_region',	10 );
add_action( 'et_shop_sidebar',			'et_shop_get_sidebar',			10 );

/**
 * Header
 * @see  et_shop_skip_links()
 * @see  et_shop_secondary_navigation()
 * @see  et_shop_site_branding()
 * @see  et_shop_primary_navigation()
 */
add_action( 'et_shop_header', 'et_shop_skip_links', 				0 );
add_action( 'et_shop_header', 'et_shop_site_branding',			20 );
add_action( 'et_shop_header', 'et_shop_secondary_navigation',		30 );
add_action( 'et_shop_header', 'et_shop_primary_navigation',		50 );

/**
 * Footer
 * @see  et_shop_footer_widgets()
 * @see  et_shop_credit()
 */
add_action( 'et_shop_footer', 'et_shop_footer_widgets',	10 );
add_action( 'et_shop_footer', 'et_shop_credit',			20 );

/**
 * Homepage
 * @see  et_shop_homepage_content()
 * @see  et_shop_product_categories()
 * @see  et_shop_recent_products()
 * @see  et_shop_featured_products()
 * @see  et_shop_popular_products()
 * @see  et_shop_on_sale_products()
 */
add_action( 'homepage', 'et_shop_homepage_content',		10 );
add_action( 'homepage', 'et_shop_product_categories',	20 );
add_action( 'homepage', 'et_shop_recent_products',		30 );
add_action( 'homepage', 'et_shop_featured_products',		40 );
add_action( 'homepage', 'et_shop_popular_products',		50 );
add_action( 'homepage', 'et_shop_on_sale_products',		60 );

/**
 * Posts
 * @see  et_shop_post_header()
 * @see  et_shop_post_meta()
 * @see  et_shop_post_content()
 * @see  et_shop_paging_nav()
 * @see  et_shop_single_post_header()
 * @see  et_shop_post_nav()
 * @see  et_shop_display_comments()
 */
add_action( 'et_shop_loop_post',			'et_shop_post_header',		10 );
add_action( 'et_shop_loop_post',			'et_shop_post_meta',			20 );
add_action( 'et_shop_loop_post',			'et_shop_post_content',		30 );
add_action( 'et_shop_loop_after',		'et_shop_paging_nav',		10 );
add_action( 'et_shop_single_post',		'et_shop_post_header',		10 );
add_action( 'et_shop_single_post',		'et_shop_post_meta',			20 );
add_action( 'et_shop_single_post',		'et_shop_post_content',		30 );
add_action( 'et_shop_single_post_after',	'et_shop_post_nav',			10 );
add_action( 'et_shop_single_post_after',	'et_shop_display_comments',	20 );

/**
 * Pages
 * @see  et_shop_page_header()
 * @see  et_shop_page_content()
 * @see  et_shop_display_comments()
 */
add_action( 'et_shop_page', 			'et_shop_page_header',		10 );
add_action( 'et_shop_page', 			'et_shop_page_content',		20 );
add_action( 'et_shop_page_after', 	'et_shop_display_comments',	10 );

/**
 * Extras
 * @see  et_shop_setup_author()
 * @see  et_shop_body_classes()
 * @see  et_shop_page_menu_args()
 */
add_filter( 'body_class',			'et_shop_body_classes' );
add_filter( 'wp_page_menu_args',	'et_shop_page_menu_args' );