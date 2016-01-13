<?php

// Display Product Categories
// Hooked into the `homepage` action in the homepage template
function et_shop_product_categories() {
  if(is_woocommerce_activated()) { ?>
    <section class="et_shop-product-section et_shop-product-categories">
      <h2 class="section-title"><?= wp_kses_post(__('Product Categories', 'et_shop')); ?></h2>
      <?= et_shop_do_shortcode('product_categories', array(
        'number'   => 3,
        'columns'  => 3,
        'orderby'  => esc_attr('name'),
        'parent'  => esc_attr(0),
      )); ?>
    </section><?php
  }
}


// Display Recent Products
// Hooked into the `homepage` action in the homepage template
function et_shop_recent_products() {
  if(is_woocommerce_activated()) { ?>
    <section class="et_shop-product-section et_shop-recent-products">
      <h2 class="section-title"><?= wp_kses_post(__('Recent Products', 'et_shop')); ?></h2>
      <?= et_shop_do_shortcode('recent_products', array(
        'per_page' => 4,
        'columns'  => 4,
      )); ?>
    </section><?php
  }
}


// Display Featured Products
// Hooked into the `homepage` action in the homepage template
function et_shop_featured_products() {
  if(is_woocommerce_activated()) {

    $featured_query = new WP_Query(array(
      'post_type'  => 'product',
      'meta_key'   => '_featured',
      'meta_value' => 'yes'
    ));

    if($featured_query->have_posts()) { ?>
      <section class="et_shop-product-section et_shop-featured-products">
        <h2 class="section-title"><?= wp_kses_post(__('Featured Products', 'et_shop')); ?></h2>
        <?= et_shop_do_shortcode('featured_products', array(
          'per_page' => 4,
          'columns'  => 4,
          'orderby'  => esc_attr('date'),
          'order'    => esc_attr('desc'),
        )); ?>
      </section><?php
    }
  }
}


// Display Popular Products
// Hooked into the `homepage` action in the homepage template
function et_shop_popular_products() {
  if(is_woocommerce_activated()) { ?>
    <section class="et_shop-product-section et_shop-popular-products">
      <h2 class="section-title"><?= wp_kses_post(__('Top Rated Products', 'et_shop')); ?></h2>
      <?= et_shop_do_shortcode('top_rated_products', array(
        'per_page' => 4,
        'columns'  => 4,
      )); ?>
    </section><?php
  }
}


// Display On Sale Products
// Hooked into the `homepage` action in the homepage template
function et_shop_on_sale_products($args) {

  if(is_woocommerce_activated()) { ?>
    <section class="et_shop-product-section et_shop-on-sale-products">
      <?php do_action('et_shop_homepage_before_on_sale_products') ?>
      <h2 class="section-title"><?= wp_kses_post(__('On Sale', 'et_shop')); ?></h2>
      <?= et_shop_do_shortcode('sale_products', array(
        'per_page' => 4,
        'columns'  => 4,
      )); ?>
      <?php do_action('et_shop_homepage_after_on_sale_products'); ?>
    </section><?php
  }
}


// Display homepage content
// Hooked into the `homepage` action in the homepage template
function et_shop_homepage_content() {
  while(have_posts()) {
    the_post();

    get_template_part('content', 'page');
  }
}


// Display et_shop sidebar
function et_shop_get_sidebar() {
  get_sidebar();
}


// Display post thumbnail
function et_shop_post_thumbnail($size) {
  if(has_post_thumbnail()) {
    the_post_thumbnail($size, array('itemprop' => 'image'));
  }
}
