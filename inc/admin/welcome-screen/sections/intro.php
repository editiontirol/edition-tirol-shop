<?php
/**
 * Welcome screen intro template
 */
?>
<?php
$et_shop = wp_get_theme( 'et_shop' );

?>
<div class="col two-col" style="overflow: hidden;">
	<h1 class="sf-title"><?php echo '<strong>Edition Tirol Shopdesign</strong> <sup class="version">' . esc_attr( $et_shop['Version'] ) . '</sup>'; ?></h1>

	<section class="sf-review">
		<p><?php echo sprintf( esc_html__( '%sEnjoying %s?%s Why not %sleave a review%s on WordPress.org? We\'d really appreciate it!', 'et_shop' ), '<strong>', 'Edition Tirol Shopdesign', '</strong>', '<a href="https://wordpress.org/themes/et_shop">', '</a>' ); ?></p>
	</section>

	<div class="col boxed enrich">
		<h2><?php printf( esc_html__( 'Built to enrich your %s store', 'et_shop' ), 'WooCommerce' ); ?></h2>

		<p><?php printf( esc_html__( 'Although %s works fine as a regular WordPress theme, it really shines when used for an online store. Install %s and start selling now.', 'et_shop' ), 'Edition Tirol Shopdesign', 'WooCommerce' ); ?></p>

		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<p><span class="activated"><span class="dashicons dashicons-yes"></span> <?php printf( esc_html__( '%s is activated', 'et_shop' ), 'WooCommerce' ); ?></span></p>
		<?php } else { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=woocommerce' ), 'install-plugin_woocommerce' ) ); ?>" class="button button-primary"><?php printf( esc_html__( 'Install %s', 'et_shop' ), 'WooCommerce' ); ?></a></p>
		<?php } ?>
	</div>

	<div class="col boxed news">
		<h2><?php printf( esc_html__( 'Latest %s news', 'et_shop' ), 'Edition Tirol Shopdesign' ); ?></h2>
		<div class="col2-set">
			<div class="col-1 news">
				<h4><?php esc_html_e( 'Recent News', 'et_shop' ); ?></h4>
				<?php
				$rss		= fetch_feed( 'http://www.woothemes.com/blog/product-news/et_shop/feed/' );
				$rss_items	= array();

				if ( ! is_wp_error( $rss ) ) {
					$maxitems 	= $rss->get_item_quantity( 1 );
					$rss_items 	= $rss->get_items( 0, $maxitems );
				}

				foreach ( $rss_items as $item ) : ?>
					<h5>
						<a href="<?php echo esc_url( $item->get_permalink() ); ?>">
							<?php echo esc_html( $item->get_title() ); ?>
						</a>
					</h5>
					<span class="date"><?php echo esc_attr( $item->get_date( 'j F Y' ) ); ?></span>
				<?php endforeach; ?>
			</div>
			<div class="col-2 docs">
				<h4><?php esc_html_e( 'Featured Docs', 'et_shop' ); ?></h4>
				<ul>
					<li><a href="http://docs.woothemes.com/document/installation-configuration/"><?php esc_html_e( 'Installation &amp; configuration', 'et_shop' ); ?></a></li>
					<li><a href="http://docs.woothemes.com/document/et_shop-faq/"><?php esc_html_e( 'FAQ', 'et_shop' ); ?></a></li>
					<li><a href="http://docs.woothemes.com/document/customizer-settings/"><?php esc_html_e( 'Customizer settings', 'et_shop' ); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>