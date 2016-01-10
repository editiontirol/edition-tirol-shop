<?php get_header(); ?>
  <section id="primary" class="content-area">
    <main id="main" class="site-main"><?php
      if(have_posts()) { ?>
        <header class="page-header">
          <h1 class="page-title"><?php printf(__('Search Results for: %s', 'et_shop'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </header>
        <?php get_template_part('loop');
      }else{
        get_template_part('content', 'none');
      } ?>
    </main>
  </section>
<?php do_action('et_shop_sidebar'); ?>
<?php get_footer(); ?>
