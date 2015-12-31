<?php
/**
 * @package et_shop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">

	<?php
	/**
 	 * @hooked et_shop_post_header() - 10
 	 * @hooked et_shop_post_meta() - 20
 	 * @hooked et_shop_post_content() - 30
	 */
	do_action( 'et_shop_loop_post' );
	?>

</article><!-- #post-## -->