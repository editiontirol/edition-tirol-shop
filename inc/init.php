<?php

// Setup: Enqueue styles, register widget regions, etc.
require_once('functions/setup.php');

// Template functions used throughout the theme.
require_once('structure/hooks.php');
require_once('structure/post.php');
require_once('structure/page.php');
require_once('structure/header.php');
require_once('structure/footer.php');
require_once('structure/comments.php');
require_once('structure/template-tags.php');

// Custom functions that act independently of the theme templates.
require_once('functions/filters.php');
require_once('functions/extras.php');

// Load WooCommerce compatibility files.
if(is_woocommerce_activated()) {
  require_once('woocommerce/hooks.php');
  require_once('woocommerce/functions.php');
  require_once('woocommerce/template-tags.php');
  require_once('woocommerce/integrations.php');
}
