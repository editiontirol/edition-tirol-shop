<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="error-404 not-found">
        <div class="page-content">
          <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'et_shop'); ?></h1>
          </header>
          <?php echo '<p>'.esc_html__('Nothing was found at this location. Try searching, or check out the links below.', 'et_shop').'</p>';

          if(is_woocommerce_activated()) {
            the_widget('WC_Widget_Product_Search'); ?>

            <div class="fourohfour-columns-2">
              <aside class="col-1">
                <?php et_shop_promoted_products(); ?>
              </aside>
              <nav class="col-2">
                <h2><?php esc_html_e('Product Categories', 'et_shop'); ?></h2>
                <?php the_widget('WC_Widget_Product_Categories', array('count' => 1)); ?>
              </nav>
            </div>
            <aside>
              <h2><?php esc_html_e('Popular Products', 'et_shop'); ?></h2>
              <?php echo et_shop_do_shortcode('best_selling_products', array('per_page' => 4, 'columns' => 4)); ?>
            </aside><?php
          } else {
            get_search_form();
          } ?>
        </div>
      </section>
    </main>
  </div>
<?php get_footer(); ?>
