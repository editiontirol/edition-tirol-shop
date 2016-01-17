<?php

function woocommerce_subcategory_thumbnail($category) {
  $small_thumbnail_size = apply_filters('single_product_small_thumbnail_size', 'shop_catalog');
  $dimensions           = wc_get_image_size($small_thumbnail_size);
  $thumbnail_id         = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);

  if($thumbnail_id) {
    $image = wp_get_attachment_image_src($thumbnail_id, $small_thumbnail_size);
    $image = $image[0];
  } else {
    $image = wc_placeholder_img_src();
  }

  if ($image) {
    // Prevent esc_url from breaking spaces in urls for image embeds
    // Ref: http://core.trac.wordpress.org/ticket/23605
    $image = str_replace(' ', '%20', $image);

    echo '<img src="'.esc_url($image).'" alt="'.esc_attr($category->name ).'"/>';
  }
}
