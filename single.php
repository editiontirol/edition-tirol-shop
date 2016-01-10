<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php while(have_posts()) {
        the_post();

        do_action('et_shop_single_post_before');
        get_template_part('content', 'single');
        do_action('et_shop_single_post_after');
      } ?>
    </main>
  </div>
<?php do_action('et_shop_sidebar'); ?>
<?php get_footer(); ?>
