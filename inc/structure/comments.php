<?php

// Edition Tirol Shopdesign display comments
function et_shop_display_comments() {
  // If comments are open or we have at least one comment, load up the comment template
  if(comments_open() || '0' != get_comments_number()) {
    comments_template();
  }
}

// Edition Tirol Shopdesign comment template
function et_shop_comment($comment, $args, $depth) {
  if('div' == $args['style']) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  } ?>
  <<?= esc_attr($tag).' '.comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID(); ?>">
  <div class="comment-body">
  <aside class="comment-meta commentmetadata">
    <div class="comment-author vcard">
      <?php echo get_avatar($comment, 200); ?>
      <?php printf('<cite class="fn">%s</cite>', get_comment_author_link()); ?>
    </div>
    <?php if('0' == $comment->comment_approved) { ?>
      <i class="comment-awaiting-moderation"><?= __('Your comment is awaiting moderation.', 'et_shop'); ?></i>
      <br />
    <?php } ?>

    <a href="<?= esc_url(htmlspecialchars(get_comment_link($comment->comment_ID))); ?>" class="comment-date"><time><?= get_comment_date(); ?></time></a>
  </aside>
  <?php if('div' != $args['style']) { ?>
    <div id="div-comment-<?php comment_ID(); ?>" class="comment-content">
  <?php } ?>

  <?php comment_text(); ?>

  <div class="reply">
    <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
    <?php edit_comment_link(__('Edit', 'et_shop'), '  ', ''); ?>
  </div>
  </div>
  <?php if('div' != $args['style']) : ?>
  </div>
  <?php endif; ?>
<?php
}

