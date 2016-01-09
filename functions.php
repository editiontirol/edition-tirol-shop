<?php

define('THEME_VERSION', wp_get_theme(basename(dirname(__FILE__)))->get('Version'));


// Override WooCommerce product thumbnail function to allow styling.
function woocommerce_template_loop_product_thumbnail() {
  echo '<div class="product-image">'.woocommerce_get_product_thumbnail().'</div>';
}

function get_the_ID_and_post_classes($classes) {
  return 'id="post-'.get_the_ID().'" class="'.implode(' ', get_post_class($classes)).'"';
}

function the_ID_and_post_classes($classes) {
  echo get_the_ID_and_post_classes($classes);
}

function remove_size_attributes_from_inserted_images($html) {
  return preg_replace('/(width|height)="\d*"\s/', '', $html);
}
add_filter('post_thumbnail_html',  'remove_size_attributes_from_inserted_images', 10);
add_filter('image_send_to_editor', 'remove_size_attributes_from_inserted_images', 10);


// Initialize all the things.
require_once('inc/init.php');
