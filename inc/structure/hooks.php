<?php

// General
add_action('after_setup_theme',       'et_shop_setup');
add_action('widgets_init',            'et_shop_widgets_init');
add_action('wp_enqueue_scripts',      'et_shop_scripts',              10);
add_action('wp_enqueue_scripts',      'et_shop_child_scripts',        30); // After WooCommerce
add_action('et_shop_sidebar',         'et_shop_get_sidebar',          10);

// Header
add_action('et_shop_header', 'et_shop_skip_links',            0);
add_action('et_shop_header', 'et_shop_site_branding',        20);
add_action('et_shop_header', 'et_shop_secondary_navigation', 30);
add_action('et_shop_header_nav', 'et_shop_primary_navigation',   50);

// Footer
add_action('et_shop_footer', 'et_shop_footer_widgets', 10);
add_action('et_shop_footer', 'et_shop_credit',         20);

// Homepage
// add_action('homepage', 'et_shop_homepage_content',   10);
add_action('homepage', 'et_shop_product_categories', 20);
add_action('homepage', 'et_shop_recent_products',    30);
add_action('homepage', 'et_shop_featured_products',  40);
// add_action('homepage', 'et_shop_popular_products',   50);
add_action('homepage', 'et_shop_on_sale_products',   60);

// Posts
add_action('et_shop_loop_post',         'et_shop_post_header',      10);
add_action('et_shop_loop_post',         'et_shop_post_meta',        20);
add_action('et_shop_loop_post',         'et_shop_post_content',     30);
add_action('et_shop_loop_after',        'et_shop_paging_nav',       10);
add_action('et_shop_single_post',       'et_shop_post_header',      10);
add_action('et_shop_single_post',       'et_shop_post_meta',        20);
add_action('et_shop_single_post',       'et_shop_post_content',     30);
add_action('et_shop_single_post_after', 'et_shop_post_nav',         10);
add_action('et_shop_single_post_after', 'et_shop_display_comments', 20);

// Pages
add_action('et_shop_page',       'et_shop_page_header',      10);
add_action('et_shop_page',       'et_shop_page_content',     20);
add_action('et_shop_page_after', 'et_shop_display_comments', 10);

// Extras
add_filter('body_class',      'et_shop_body_classes');
add_filter('wp_page_menu_args',  'et_shop_page_menu_args');
