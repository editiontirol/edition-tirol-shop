<?php
// Custom functions that act independently of the theme templates

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
function et_shop_page_menu_args($args) {
  $args['show_home'] = true;
  return $args;
}

// Adds custom classes to the array of body classes.
function et_shop_body_classes($classes) {
  $classes[] = function_exists('woocommerce_breadcrumb') ? 'wc-breadcrumb' : 'no-wc-breadcrumb';

  return $classes;
}

// Query WooCommerce activation
function is_woocommerce_activated() {
  return class_exists('woocommerce');
}

// Schema type
function et_shop_html_tag_schema() {
  $type     = 'WebPage';

  if(is_singular('post')) {
    $type   = 'Article';
  } elseif(is_author()) {
    $type   = 'ProfilePage';
  } elseif(is_search()) {
    $type = 'SearchResultsPage';
  }

  echo 'itemscope="itemscope" itemtype="'.esc_attr('http://schema.org/'.$type).'"';
}


// Check if there is more than one non-empty category.
function is_categorized_blog() {
  if(($is_categorized_blog = get_transient('is_categorized_blog')) === false) {

    $is_categorized_blog = (count(get_categories(array(
      'fields'     => 'ids',
      'hide_empty' => 1,
      'number'     => 2
    ))) > 1);

    set_transient('is_categorized_blog', $is_categorized_blog ? 1 : 0);
  }

  return $is_categorized_blog;
}


// Flush out the transients used in is_categorized_blog.
function flush_transient_is_categorized_blog() {
  delete_transient('is_categorized_blog');
}
add_action('edit_category', 'flush_transient_is_categorized_blog');
add_action('save_post',     'flush_transient_is_categorized_blog');


// Call a shortcode function by tag name.
function et_shop_do_shortcode($tag, array $atts = array(), $content = null) {

  global $shortcode_tags;

  if(!isset($shortcode_tags[$tag])) {
    return false;
  }

  return call_user_func($shortcode_tags[$tag], $atts, $content, $tag);
}
