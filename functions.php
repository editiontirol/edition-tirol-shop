<?php

$THEME = wp_get_theme(basename(dirname(__FILE__)));

define('THEME_AUTHOR',  $THEME['Author']);
define('THEME_NAME',    $THEME['Name']);
define('THEME_VERSION', $THEME['Version']);


// Override WooCommerce product thumbnail function to allow styling.
function woocommerce_template_loop_product_thumbnail() {
  echo '<div class="product-image">'.woocommerce_get_product_thumbnail().'</div>';
}


function get_the_ID_and_post_classes($classes = '') {
  return 'id="post-'.get_the_ID().'" class="'.implode(' ', get_post_class($classes)).'"';
}


function the_ID_and_post_classes($classes = '') {
  echo get_the_ID_and_post_classes($classes);
}


// Initialize all the things.
require_once('inc/init.php');
