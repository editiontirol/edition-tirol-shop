<?php

// Override WooCommerce Product Thumbnail Function
// Get the product thumbnail for the loop.
function woocommerce_template_loop_product_thumbnail() {
  echo '<div class="product-image">'.woocommerce_get_product_thumbnail().'</div>';
}

function remove_size_attributes_from_inserted_images($html) {
  return preg_replace('/(width|height)="\d*"\s/', '', $html);
}
add_filter('post_thumbnail_html',  'remove_size_attributes_from_inserted_images', 10);
add_filter('image_send_to_editor', 'remove_size_attributes_from_inserted_images', 10);


// Initialize all the things.
require get_template_directory().'/inc/init.php';
