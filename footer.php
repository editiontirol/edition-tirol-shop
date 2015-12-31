<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package et_shop
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'et_shop_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * @hooked et_shop_footer_widgets - 10
			 * @hooked et_shop_credit - 20
			 */
			do_action( 'et_shop_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'et_shop_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
