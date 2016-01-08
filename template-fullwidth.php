<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php
        do_action('et_shop_page_before');
        ?>

        <?php get_template_part('content', 'page'); ?>

        <?php
        /**
         * @hooked et_shop_display_comments - 10
         */
        do_action('et_shop_page_after');
        ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
