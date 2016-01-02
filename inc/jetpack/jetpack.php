<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package et_shop
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function et_shop_jetpack_setup() {
  add_theme_support( 'infinite-scroll', array(
    'container' => 'main',
    'footer'    => 'page',
  ) );
}
add_action('after_setup_theme', 'et_shop_jetpack_setup');
