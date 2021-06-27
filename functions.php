<?php

function green_climate_link_to( $title, $url, $color="#E68007" ) {
  echo  '<a href="' . esc_url( $url )  .  '" class="d-inline-flex align-items-center ml-auto font-weight-bold">' .
        '<span class="mr-2">' . $title . '</span>' .
        '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">' .
          '<path d="M8.97733 17.9547C13.9354 17.9547 17.9547 13.9354 17.9547 8.97733C17.9547 4.01929 13.9354 0 8.97733 0C4.01929 0 0 4.01929 0 8.97733C0 13.9354 4.01929 17.9547 8.97733 17.9547Z" fill="' . sanitize_hex_color( $color ) .'"/>' .
          '<path d="M7.88917 4.48865L6.39294 5.98487L9.43073 8.97731L6.39294 12.0151L7.88917 13.5113L12.4232 8.97731L7.88917 4.48865Z" fill="white"/>' .
        '</svg>' .
      '</a>';  
}

$includes = array( '/inc/hook.php', '/inc/theme-setup.php', '/inc/enqueue.php', '/inc/customize.php', '/inc/custom_cpt.php' );

foreach ($includes as $include) {
  $include = locate_template( $include );
  load_template( $include );
}