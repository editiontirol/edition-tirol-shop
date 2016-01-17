<?php

function et_shop_footer_widgets() {

  $max_widgets = 4;
  $widget_columns = 0;

  for($i = 0; $i <= $max_widgets; $i++) {
    if(is_active_sidebar('footer-'.$i)) {
      $widget_columns++;
    }
  }

  if($widget_columns) { ?>
    <div class="footer-widgets col-<?= intval($widget_columns); ?> fix"><?php

      $widget_num = 1;

      for($i = 1; $i <= $max_widgets; $i++) {
        if(is_active_sidebar('footer-'.$i)) { ?>
          <aside class="block footer-widget-<?= intval($widget_num++); ?> widget">
            <?php dynamic_sidebar('footer-'.intval($i)); ?>
          </aside><?php
        }
      }
      ?>
    </div><?php
  }
}


function et_shop_credit() {
  ?>
  <div class="site-info"><?php
    echo esc_html('©'.date(' Y ').get_bloginfo('name'));
    // printf('<br />'.esc_html__('%1$s designed by %2$s.', 'et_shop' ), THEME_NAME, THEME_AUTHOR); ?>
  </div><?php
}
