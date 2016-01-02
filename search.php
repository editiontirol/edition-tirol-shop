<?php
/**
 * The template for displaying search results pages.
 *
 * @package et_shop
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if (have_posts()) : ?>

      <header class="page-header">
        <h1 class="page-title"><?php printf(__('Search Results for: %s', 'et_shop'), '<span>' . get_search_query() . '</span>'); ?></h1>
      </header><!-- .page-header -->

      <?php get_template_part('loop'); ?>

    <?php else : ?>

      <?php get_template_part('content', 'none'); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </section><!-- #primary -->

<?php do_action('et_shop_sidebar'); ?>
<?php get_footer(); ?>
