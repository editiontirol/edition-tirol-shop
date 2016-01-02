<?php
/**
 * et_shop WooCommerce hooks
 *
 * @package et_shop
 */

/**
 * Styles
 * @see  et_shop_woocommerce_scripts()
 */
add_action( 'wp_enqueue_scripts', 			'et_shop_woocommerce_scripts',		20 );
add_filter( 'woocommerce_enqueue_styles', 	'__return_empty_array' );

/**
 * Layout
 * @see  et_shop_before_content()
 * @see  et_shop_after_content()
 * @see  woocommerce_breadcrumb()
 * @see  et_shop_shop_messages()
 */
remove_action( 'woocommerce_before_main_content', 	'woocommerce_breadcrumb', 					20, 0 );
remove_action( 'woocommerce_before_main_content', 	'woocommerce_output_content_wrapper', 		10 );
remove_action( 'woocommerce_after_main_content', 	'woocommerce_output_content_wrapper_end', 	10 );
remove_action( 'woocommerce_sidebar', 				'woocommerce_get_sidebar', 					10 );
remove_action( 'woocommerce_after_shop_loop', 		'woocommerce_pagination', 					10 );
remove_action( 'woocommerce_before_shop_loop', 		'woocommerce_result_count', 				20 );
remove_action( 'woocommerce_before_shop_loop', 		'woocommerce_catalog_ordering', 			30 );
add_action( 'woocommerce_before_main_content', 		'et_shop_before_content', 				10 );
add_action( 'woocommerce_after_main_content', 		'et_shop_after_content', 				10 );
add_action( 'et_shop_content_top', 				'et_shop_shop_messages', 				1 );
add_action( 'et_shop_content_top', 				'woocommerce_breadcrumb', 					10 );

add_action( 'woocommerce_after_shop_loop',			'et_shop_sorting_wrapper',				9 );
add_action( 'woocommerce_after_shop_loop', 			'woocommerce_catalog_ordering', 			10 );
add_action( 'woocommerce_after_shop_loop', 			'woocommerce_result_count', 				20 );
add_action( 'woocommerce_after_shop_loop', 			'woocommerce_pagination', 					30 );
add_action( 'woocommerce_after_shop_loop',			'et_shop_sorting_wrapper_close',			31 );

add_action( 'woocommerce_before_shop_loop',			'et_shop_sorting_wrapper',				9 );
add_action( 'woocommerce_before_shop_loop', 		'woocommerce_catalog_ordering', 			10 );
add_action( 'woocommerce_before_shop_loop', 		'woocommerce_result_count', 				20 );
add_action( 'woocommerce_before_shop_loop', 		'et_shop_woocommerce_pagination', 		30 );
add_action( 'woocommerce_before_shop_loop',			'et_shop_sorting_wrapper_close',			31 );

/**
 * Products
 * @see  et_shop_upsell_display()
 */
remove_action( 'woocommerce_after_single_product_summary', 	'woocommerce_upsell_display', 				15 );
add_action( 'woocommerce_after_single_product_summary', 	'et_shop_upsell_display', 				15 );
remove_action( 'woocommerce_before_shop_loop_item_title', 	'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 		'woocommerce_show_product_loop_sale_flash', 6 );

/**
 * Header
 * @see  et_shop_product_search()
 * @see  et_shop_header_cart()
 */
add_action( 'et_shop_header', 'et_shop_product_search', 	40 );
add_action( 'et_shop_header', 'et_shop_header_cart', 		60 );

/**
 * Filters
 * @see  et_shop_woocommerce_body_class()
 * @see  et_shop_cart_link_fragment()
 * @see  et_shop_thumbnail_columns()
 * @see  et_shop_related_products_args()
 * @see  et_shop_products_per_page()
 * @see  et_shop_loop_columns()
 */
add_filter( 'body_class', 								'et_shop_woocommerce_body_class' );
add_filter( 'woocommerce_product_thumbnails_columns', 	'et_shop_thumbnail_columns' );
add_filter( 'woocommerce_output_related_products_args', 'et_shop_related_products_args' );
add_filter( 'loop_shop_per_page', 						'et_shop_products_per_page' );
add_filter( 'loop_shop_columns', 						'et_shop_loop_columns' );

if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'et_shop_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'et_shop_cart_link_fragment' );
}

/**
 * Integrations
 * @see  et_shop_woocommerce_integrations_scripts()
 */
add_action( 'wp_enqueue_scripts', 						'et_shop_woocommerce_integrations_scripts' );
