<?php

function et_shop_setup() {

  /*
   * Load Localisation files.
   *
   * Note: the first-loaded translation file overrides any following ones if the same translation is present.
   */

  // wp-content/languages/themes/et_shop-de_DE.mo
  load_theme_textdomain('et_shop', trailingslashit(WP_LANG_DIR) . 'themes/');

  // wp-content/themes/et_shop/languages/de_DE.mo
  load_theme_textdomain('et_shop', get_template_directory() . '/languages');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'et_shop'),
  ));

  // Switch default core markup to HTML 5 for search form, comment form, comments, galleries, captions and widgets.
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'widgets',
  ));

  // Declare WooCommerce support
  add_theme_support('woocommerce');

  // Declare support for title theme feature
  add_theme_support('title-tag');
}

// Register widget area.
function et_shop_widgets_init() {
  register_sidebar( array(
    'name'          => __('Sidebar', 'et_shop'),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  $footer_widget_regions = apply_filters('et_shop_footer_widget_regions', 4);

  for($i = 1; $i <= intval($footer_widget_regions); $i++) {
    register_sidebar( array(
      'name'         => sprintf(__('Footer %d', 'et_shop'), $i),
      'id'         => sprintf('footer-%d', $i),
      'description'     => sprintf(__('Widgetized Footer Region %d.', 'et_shop'), $i),
      'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'     => '</aside>',
      'before_title'     => '<h3>',
      'after_title'     => '</h3>',
      )
    );
  }
}

// Enqueue scripts and styles.
function et_shop_scripts() {

  wp_enqueue_style('et_shop-style', get_template_directory_uri() . '/style.css', none, THEME_VERSION);

  wp_enqueue_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', none, '');
  wp_enqueue_script('et_shop-navigation', get_template_directory_uri() . '/js/navigation.min.js', array('jquery'), THEME_VERSION, true);
  wp_enqueue_script('et_shop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', none, THEME_VERSION, true);


  if(is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

/**
 * Enqueue child theme stylesheet.
 * A separate function is required as the child theme css needs to be enqueued _after_ the parent theme
 * primary css and the separate WooCommerce css.
 * @since  1.0.0
 */
function et_shop_child_scripts() {
  if(is_child_theme()) {
    wp_enqueue_style('et_shop-child-style', get_stylesheet_uri(), '');
  }
}
