<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package et_shop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  /**
   * @hooked et_shop_page_header - 10
   * @hooked et_shop_page_content - 20
   */
  do_action('et_shop_page');
  ?>
</article><!-- #post-## -->
