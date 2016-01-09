<?php get_header(); ?>
  <section id="primary" class="content-area">
    <main id="main" class="site-main" role="main"><?php
      if(have_posts()) { ?>
        <header class="page-header">
          <h1 class="page-title"><?php the_archive_title(); ?></h1>
          <?php the_archive_description(); ?>
        </header>
        <?php get_template_part('loop');
      } else {
        get_template_part('content', 'none');
      } ?>
    </main>
  </section>
<?php do_action('et_shop_sidebar'); ?>
<?php get_footer(); ?>
