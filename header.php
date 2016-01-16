<!doctype html>
<html <?php language_attributes(); ?> <?php et_shop_html_tag_schema(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <?php do_action('et_shop_before_header'); ?>

    <header class="site-header">
      <div class="header-nav">
        <nav id="site-navigation" class="main-navigation col-full" aria-label="<?php esc_html_e('Header Navigation', 'et_shop'); ?>">
          <?php do_action('et_shop_header_nav'); ?>
        </nav>
      </div>
      <div class="col-full">
        <?php do_action('et_shop_header'); ?>
      </div>
    </header>

    <?php do_action('et_shop_before_content'); ?>

    <div id="content" class="site-content" tabindex="-1">
      <div class="col-full">
      <?php do_action('et_shop_content_top'); ?>
