<?php
/**
 * The template for displaying WooCommerce product listings.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package et_shop
 *
 */

get_header(); ?>

  <section id="primary" class="content-area full-width">
    <main id="main" class="site-main" role="main">
      <?php woocommerce_content(); ?>
    </main><!-- #main -->
  </section><!-- #primary -->

<?php get_footer(); ?>
