<?php

  do_action('et_shop_loop_before');

  while(have_posts()) {
    the_post();
    get_template_part('content', get_post_format());
  }

  do_action('et_shop_loop_after');
