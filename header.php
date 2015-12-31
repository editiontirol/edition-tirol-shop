<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package et_shop
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php et_shop_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'et_shop_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
		<div class="col-full">

			<?php
			/**
			 * @hooked et_shop_skip_links - 0
			 * @hooked et_shop_social_icons - 10
			 * @hooked et_shop_site_branding - 20
			 * @hooked et_shop_secondary_navigation - 30
			 * @hooked et_shop_product_search - 40
			 * @hooked et_shop_primary_navigation - 50
			 * @hooked et_shop_header_cart - 60
			 */
			do_action( 'et_shop_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked et_shop_header_widget_region - 10
	 */
	do_action( 'et_shop_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'et_shop_content_top' ); ?>
