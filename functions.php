<?php
/**
 * et_shop engine room
 *
 * @package et_shop
 */

function remove_size_attributes_from_inserted_images($html) {
  return preg_replace('/(width|height)="\d*"\s/', '', $html);
}
add_filter('post_thumbnail_html', 'remove_size_attributes_from_inserted_images', 10);
add_filter('image_send_to_editor', 'remove_size_attributes_from_inserted_images', 10);

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woothemes/theme-customisations
 */
