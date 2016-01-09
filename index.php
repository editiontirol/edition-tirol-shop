<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main"><?php
      if(have_posts()) {
        get_template_part('loop');
      } else {
        get_template_part('content', 'none');
      } ?>
    </main>
  </div>
<?php do_action('et_shop_sidebar'); ?>
<?php get_footer(); ?>
