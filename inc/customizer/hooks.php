<?php
/**
 * et_shop customizer hooks
 *
 * @package et_shop
 */

add_action( 'customize_preview_init', 			'et_shop_customize_preview_js' );
add_action( 'customize_register', 				'et_shop_customize_register' );
add_filter( 'body_class', 						'et_shop_layout_class' );
add_action( 'wp_enqueue_scripts', 				'et_shop_add_customizer_css', 130 );
add_action( 'after_setup_theme', 				'et_shop_custom_header_setup' );
add_action( 'customize_controls_print_styles', 	'et_shop_customizer_custom_control_css' );