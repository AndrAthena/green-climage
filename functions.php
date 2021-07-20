<?php


$includes = array( '/inc/theme-setup.php', '/inc/hook.php', '/inc/enqueue.php', '/inc/customize.php', '/inc/custom_cpt.php', '/inc/widget.php' );

foreach ($includes as $include) {
  $include = locate_template( $include );
  load_template( $include );
}
