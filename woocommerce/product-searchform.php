<?php if (!defined('ABSPATH')) { die; } ?>
<form method="get" class="woocommerce-product-search" action="<?= esc_url(home_url('/')); ?>">
	<label class="screen-reader-text"><?= __('Search for:', 'woocommerce'); ?></label>
	<input type="search" class="search-field" placeholder="<?= esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?= get_search_query(); ?>" name="s" title="<?= esc_attr_x('Search for:', 'label', 'woocommerce'); ?>" />
	<input type="submit" value="<?= esc_attr_x('Search', 'submit button', 'woocommerce'); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>
