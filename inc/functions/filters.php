<?php

function remove_size_attributes_from_image($img) {
  return preg_replace('/\s(width|height)=("\d*"|\'\d*\')/', '', $img);
}
add_filter('post_thumbnail_html',  'remove_size_attributes_from_image');
add_filter('image_send_to_editor', 'remove_size_attributes_from_image');
add_filter('get_avatar',           'remove_size_attributes_from_image');
