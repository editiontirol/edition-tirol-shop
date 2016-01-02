<?php

if ( ! function_exists( 'et_shop_header_widget_region' ) ) {
  /**
   * Display header widget region
   * @since  1.0.0
   */
  function et_shop_header_widget_region() {
    if ( is_active_sidebar( 'header-1' ) ) {
    ?>
    <div class="header-widget-region" role="complementary">
      <div class="col-full">
        <?php dynamic_sidebar( 'header-1' ); ?>
      </div>
    </div>
    <?php
    }
  }
}

if ( ! function_exists( 'et_shop_site_branding' ) ) {
  /**
   * Display Site Branding
   * @since  1.0.0
   * @return void
   */
  function et_shop_site_branding() {
    if ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
      jetpack_the_site_logo();
    } else { ?>
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php if ( '' != get_bloginfo( 'description' ) ) { ?>
          <p class="site-description"><?php echo bloginfo( 'description' ); ?></p>
        <?php } ?>
      </div>
    <?php }
  }
}

if ( ! function_exists( 'et_shop_primary_navigation' ) ) {
  /**
   * Display Primary Navigation
   * @since  1.0.0
   * @return void
   */
  function et_shop_primary_navigation() {
    ?>
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'et_shop' ); ?>">
    <button class="menu-toggle" aria-controls="primary-navigation" aria-expanded="false"><?php echo esc_attr( apply_filters( 'et_shop_menu_toggle_text', __( 'Navigation', 'et_shop' ) ) ); ?></button>
      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'container_class'  => 'primary-navigation',
          )
      );

      wp_nav_menu(
        array(
          'theme_location'  => 'handheld',
          'container_class'  => 'handheld-navigation',
          )
      );
      ?>
    </nav><!-- #site-navigation -->
    <?php
  }
}

if ( ! function_exists( 'et_shop_secondary_navigation' ) ) {
  /**
   * Display Secondary Navigation
   * @since  1.0.0
   * @return void
   */
  function et_shop_secondary_navigation() {
    ?>
    <nav class="secondary-navigation" role="navigation" aria-label="<?php _e( 'Secondary Navigation', 'et_shop' ); ?>">
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'secondary',
            'fallback_cb'    => '',
          )
        );
      ?>
    </nav><!-- #site-navigation -->
    <?php
  }
}

if ( ! function_exists( 'et_shop_skip_links' ) ) {
  /**
   * Skip links
   * @since  1.4.1
   * @return void
   */
  function et_shop_skip_links() {
    ?>
    <a class="skip-link screen-reader-text" href="#site-navigation"><?php _e( 'Skip to navigation', 'et_shop' ); ?></a>
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'et_shop' ); ?></a>
    <?php
  }
}


