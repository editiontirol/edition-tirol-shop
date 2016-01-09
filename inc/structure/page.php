<?php

if(! function_exists('et_shop_page_header')) {
  // Display the post header with a link to the single post
  function et_shop_page_header() {
    ?>
    <header class="entry-header">
      <?php
      et_shop_post_thumbnail('full');
      the_title('<h1 class="entry-title" itemprop="name">', '</h1>');
      ?>
    </header><!-- .entry-header -->
    <?php
  }
}

if(! function_exists('et_shop_page_content')) {
  // Display the post content with a link to the single post
  function et_shop_page_content() {
    ?>
    <div class="entry-content" itemprop="mainContentOfPage">
      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __('Pages:', 'et_shop'),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->
    <?php
  }
}
