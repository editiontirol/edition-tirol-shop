<?php

// Before Content
// Wraps all WooCommerce content in wrappers which match the theme markup
if(! function_exists('et_shop_before_content')) {
  function et_shop_before_content() { ?>
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <?php
  }
}

// After Content
// Closes the wrapping divs
if(! function_exists('et_shop_after_content')) {
  function et_shop_after_content() { ?>
      </main>
    </div>

    <?php do_action('et_shop_sidebar');
  }
}

// Default loop columns on product archives
function et_shop_loop_columns() {
  return apply_filters('et_shop_loop_columns', 3); // 3 products per row
}

// Add 'woocommerce-active' class to the body tag
function et_shop_woocommerce_body_class($classes) {
  if(is_woocommerce_activated()) {
    $classes[] = 'woocommerce-active';
  }

  return $classes;
}

// Cart Fragments
// Ensure cart contents update when products are added to the cart via AJAX
function et_shop_cart_link_fragment($fragments) {
  global $woocommerce;

  ob_start();

  et_shop_cart_link();

  $fragments['a.cart-contents'] = ob_get_clean();

  return $fragments;
}

// WooCommerce specific scripts & stylesheets
function et_shop_woocommerce_scripts() {
  wp_enqueue_style('et_shop-woocommerce-style', get_template_directory_uri() . '/inc/woocommerce/css/woocommerce.css', THEME_VERSION);
}

// Related Products Args
function et_shop_related_products_args($args) {
  $args = apply_filters( 'et_shop_related_products_args', array(
    'posts_per_page' => 3,
    'columns'        => 3,
  ));

  return $args;
}

// Product gallery thumnail columns
function et_shop_thumbnail_columns() {
  return intval(apply_filters('et_shop_product_thumbnail_columns', 4));
}

// Products per page
function et_shop_products_per_page() {
  return intval(apply_filters('et_shop_products_per_page', 12));
}

// Query WooCommerce Extension Activation.
function is_woocommerce_extension_activated($extension = 'WC_Bookings') {
  return class_exists($extension);
}
