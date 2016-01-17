<?php

function remove_size_attributes_from_image($img) {
  return preg_replace('/\s(width|height)=("\d*"|\'\d*\')/', '', $img);
}
add_filter('post_thumbnail_html',  'remove_size_attributes_from_image');
add_filter('image_send_to_editor', 'remove_size_attributes_from_image');
add_filter('get_avatar',           'remove_size_attributes_from_image');


function remove_formal_from_language_attributes($lang) {
  return preg_replace('/(?<=[^-][^x])-formal(\'|")/', '$1', $lang);
}
add_filter('language_attributes', 'remove_formal_from_language_attributes');


function remove_role_from_search_form($form) {
  return preg_replace('/\srole=("search"|\'search\')/', '', $form);
}
add_filter('WC_Widget_Product_Search', 'remove_role_from_search_form');
