<section class="no-results not-found">
  <header class="page-header">
    <h1 class="page-title"><?php _e('Nothing Found', 'et_shop'); ?></h1>
  </header><!-- .page-header -->

  <div class="page-content">
    <?php if(is_home() && current_user_can('publish_posts')) {
      printf('<p>'.esc_html__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'et_shop').'</p>', esc_url(admin_url('post-new.php')));
    } elseif(is_search()) {
      echo '<p>'.esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'et_shop').'</p>';
      get_search_form();
    } else {
      echo '<p>'.esc_html__('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'et_shop').'</p>';
      get_search_form();
    } ?>
  </div><!-- .page-content -->
</section><!-- .no-results -->
