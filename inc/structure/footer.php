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
    <section class="footer-widgets col-<?php echo intval($widget_columns); ?> fix"><?php

      $widget_num = 1;

      for($i = 1; $i <= $max_widgets; $i++) {
        if(is_active_sidebar('footer-'.$i)) { ?>
          <section class="block footer-widget-<?php echo intval($widget_num++); ?>">
            <?php dynamic_sidebar('footer-'.intval($i)); ?>
          </section><?php
        }
      } ?>
    </section><?php
  }
}


function et_shop_credit() {
  ?>
  <div class="site-info"><?php
    echo esc_html('© '.get_bloginfo('name').date(' Y'));

    if(apply_filters('et_shop_credit_link', true)) {
      printf('<br />'.__('%1$s designed by %2$s.', 'et_shop' ), 'Edition Tirol Shopdesign', '<a href="http://reitermark.us" rel="designer">Markus Reiter</a>');
    } ?>
  </div>
  <?php
}
