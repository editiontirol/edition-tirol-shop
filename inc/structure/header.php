<?php

function et_shop_site_branding() { ?>
  <div class="site-branding">
    <h1 class="site-title">
      <a href="<?= esc_url(home_url('/')); ?>" rel="home"><span class="site-title-text"><?php bloginfo('name'); ?></span><span class="site-logo"><?php include(get_template_directory().'/images/edition-tirol-logo.svg'); ?></span></a>
    </h1>

    <?php if(get_bloginfo('description') != '') { ?>
      <p class="site-description"><?= bloginfo('description'); ?></p>
    <?php } ?>
  </div><?php
}

// Display Primary Navigation
function et_shop_primary_navigation() {
  if(has_nav_menu('primary')) { ?>
    <button class="menu-toggle" aria-controls="menu-<?= wp_get_nav_menu_object(get_nav_menu_locations()['primary'])->slug; ?>" aria-expanded="false"><?= esc_attr(apply_filters('et_shop_menu_toggle_text', __('Navigation', 'et_shop'))); ?></button><?php

    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container'      => '',
      'items_wrap'     => '<ul id="%1$s" class="%2$s primary-navigation">%3$s</ul>',
    ));
  }
}

// Skip links
function et_shop_skip_links() { ?>
  <a class="skip-link screen-reader-text" href="#site-navigation"><?= __('Skip to navigation', 'et_shop'); ?></a>
  <a class="skip-link screen-reader-text" href="#content"><?= __('Skip to content', 'et_shop'); ?></a><?php
}


