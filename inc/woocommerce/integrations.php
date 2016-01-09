<?php
/**
 * Integration logic for WooCommerce extensions
 *
 * @package et_shop
 */

/**
 * Styles & Scripts
 * @return void
 */
function et_shop_woocommerce_integrations_scripts() {
  /**
   * Bookings
   */
  if(is_woocommerce_extension_activated('WC_Bookings')) {
    wp_enqueue_style('et_shop-woocommerce-bookings-style', get_template_directory_uri() . '/inc/woocommerce/css/bookings.css', 'et_shop-woocommerce-style');
  }

  /**
   * Brands
   */
  if(is_woocommerce_extension_activated('WC_Brands')) {
    wp_enqueue_style('et_shop-woocommerce-brands-style', get_template_directory_uri() . '/inc/woocommerce/css/brands.css', 'et_shop-woocommerce-style');
  }

  /**
   * Wishlists
   */
  if(is_woocommerce_extension_activated('WC_Wishlists_Wishlist')) {
    wp_enqueue_style('et_shop-woocommerce-wishlists-style', get_template_directory_uri() . '/inc/woocommerce/css/wishlists.css', 'et_shop-woocommerce-style');
  }

  /**
   * AJAX Layered Nav
   */
  if(is_woocommerce_extension_activated('SOD_Widget_Ajax_Layered_Nav')) {
    wp_enqueue_style('et_shop-woocommerce-ajax-layered-nav-style', get_template_directory_uri() . '/inc/woocommerce/css/ajax-layered-nav.css', 'et_shop-woocommerce-style');
  }

  /**
   * Variation Swatches
   */
  if(is_woocommerce_extension_activated('WC_SwatchesPlugin')) {
    wp_enqueue_style('et_shop-woocommerce-variation-swatches-style', get_template_directory_uri() . '/inc/woocommerce/css/variation-swatches.css', 'et_shop-woocommerce-style');
  }

  /**
   * Composite Products
   */
  if(is_woocommerce_extension_activated('WC_Composite_Products')) {
    wp_enqueue_style('et_shop-woocommerce-composite-products-style', get_template_directory_uri() . '/inc/woocommerce/css/composite-products.css', 'et_shop-woocommerce-style');
  }

  /**
   * WooCommerce Photography
   */
  if(is_woocommerce_extension_activated('WC_Photography')) {
    wp_enqueue_style('et_shop-woocommerce-photography-style', get_template_directory_uri() . '/inc/woocommerce/css/photography.css', 'et_shop-woocommerce-style');
  }

  /**
   * Product Reviews Pro
   */
  if(is_woocommerce_extension_activated('WC_Product_Reviews_Pro')) {
    wp_enqueue_style('et_shop-woocommerce-product-reviews-pro-style', get_template_directory_uri() . '/inc/woocommerce/css/product-reviews-pro.css', 'et_shop-woocommerce-style');
  }

  /**
   * WooCommerce Smart Coupons
   */
  if(is_woocommerce_extension_activated('WC_Smart_Coupons')) {
    wp_enqueue_style('et_shop-woocommerce-smart-coupons-style', get_template_directory_uri() . '/inc/woocommerce/css/smart-coupons.css', 'et_shop-woocommerce-style');
  }

  /**
   * WooCommerce Deposits
   */
  if(is_woocommerce_extension_activated('WC_Deposits')) {
    wp_enqueue_style('et_shop-woocommerce-deposits-style', get_template_directory_uri() . '/inc/woocommerce/css/deposits.css', 'et_shop-woocommerce-style');
  }

  /**
   * WooCommerce Product Bundles
   */
  if(is_woocommerce_extension_activated('WC_Bundles')) {
    wp_enqueue_style('et_shop-woocommerce-bundles-style', get_template_directory_uri() . '/inc/woocommerce/css/bundles.css', 'et_shop-woocommerce-style');
  }
}
