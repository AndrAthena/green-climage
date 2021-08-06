<?php


$includes = array( '/inc/theme-setup.php', '/inc/hook.php', '/inc/enqueue.php', '/inc/custom_cpt.php', '/inc/widget.php', '/inc/shortcode.php', '/inc/customize.php' );

foreach ($includes as $include) {
  $include = locate_template( $include );
  load_template( $include );
}
