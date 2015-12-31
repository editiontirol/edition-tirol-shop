<?php
/**
 * Welcome screen enhance template
 */
?>
<?php

?>
<div class="col two-col" style="overflow: hidden;">
	<div class="col">
		<div class="boxed enhance">
			<h2><?php printf( esc_html__( 'Enhance %s', 'et_shop' ), 'Edition Tirol Shopdesign' ); ?></h2>
			<p>
				<?php printf( esc_html__( 'Take a look at our range of extensions that compliment and extend %s functionality.', 'et_shop' ), 'Edition Tirol Shopdesign\'s' ); ?>
			</p>

			<ul class="extensions">
				<li><a href="https://www.woothemes.com/products/et_shop-woocommerce-customiser?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">WooCommerce Customiser</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-product-hero?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Product Hero</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-parallax-hero?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Parallax Hero</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-designer?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Designer</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-checkout-customiser/?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Checkout Customiser</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-reviews?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Reviews</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-pricing-tables?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Pricing Tables</a></li>
				<li><a href="https://www.woothemes.com/products/et_shop-blog-customiser?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">Blog Customiser</a></li>
			</ul>

			<a href="http://www.woothemes.com/product-category/et_shop-extensions?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons" class="button button-primary">
				<?php printf( esc_html__( 'View all %s extensions &rarr;', 'et_shop' ), 'Edition Tirol Shopdesign' ); ?>
			</a>

		</div>

		<div class="boxed free-plugins">
			<h2><?php esc_html_e( 'Install free plugins', 'et_shop' ); ?></h2>
			<p>
				<?php echo sprintf( esc_html__( 'There are a number of free plugins available for %s on the WordPress.org %splugin repository%s. Here are just a few:', 'et_shop' ), 'Edition Tirol Shopdesign', '<a href="https://wordpress.org/plugins/search.php?q=et_shop">', '</a>' ); ?>
			</p>
			<ul class="extensions">
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=et_shop-product-pagination&TB_iframe=true&width=744&height=800' ), 'install-plugin_et_shop-product-pagination' ) ); ?>">Product Pagination</a></li>
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=et_shop-product-sharing&TB_iframe=true&width=744&height=800' ), 'install-plugin_et_shop-product-sharing' ) ); ?>">Product Sharing</a></li>
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=et_shop-footer-bar&TB_iframe=true&width=744&height=800' ), 'install-plugin_et_shop-footer-bar' ) ); ?>">Footer Bar</a></li>
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=et_shop-sticky-add-to-cart&TB_iframe=true&width=744&height=800' ), 'install-plugin_et_shop-sticky-add-to-cart' ) ); ?>">Sticky Add to Cart</a></li>
			</ul>
		</div>
	</div>

	<div class="col boxed child-themes">
		<h2><?php esc_html_e( 'Child themes', 'et_shop' ); ?></h2>
		<p><?php printf( esc_html__( 'Take a look at our range of child themes for %s that allow you to easily change the look of your store to suit a specific industry.', 'et_shop' ), 'Edition Tirol Shopdesign' ); ?></p>

		<div class="child-theme">
			<a href="http://www.woothemes.com/products/outlet?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/outlet.jpg'; ?>" alt="<?php esc_html_e( 'Proshop Child Theme', 'et_shop' ); ?>" class="image-50" />
				<span class="child-theme-title">Outlet</span>
			</a>
		</div>

		<div class="child-theme">
			<a href="http://www.woothemes.com/products/proshop?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/proshop.jpg'; ?>" alt="<?php esc_html_e( 'Proshop Child Theme', 'et_shop' ); ?>" class="image-50" />
				<span class="child-theme-title">ProShop</span>
			</a>
		</div>

		<div class="child-theme">
			<a href="http://www.woothemes.com/products/galleria?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/galleria.jpg'; ?>" alt="<?php esc_html_e( 'Galleria Child Theme', 'et_shop' ); ?>" class="image-50" />
				<span class="child-theme-title">Galleria</span>
			</a>
		</div>

		<div class="child-theme">
			<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=boutique' ), 'install-theme_boutique' ) ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/boutique.jpg'; ?>" alt="<?php esc_html_e( 'Boutique Child Theme', 'et_shop' ); ?>" class="image-50" />
				<p class="free"><?php esc_html_e( 'Free!', 'et_shop' ); ?></p>
				<span class="child-theme-title">Boutique</span>
			</a>
		</div>

		<a href="http://www.woothemes.com/product-category/themes/et_shop-child-theme-themes?utm_source=product&utm_medium=upsell&utm_campaign=et_shopaddons" class="button button-primary">
			<?php printf( esc_html__( 'View all %s child themes &rarr;', 'et_shop' ), 'Edition Tirol Shopdesign' ); ?>
		</a>
	</div>
</div>