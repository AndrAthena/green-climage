<?php

  function green_climat_nav_menu_css_class( $classes, $item, $args ) {
  if( 'main' == $args->theme_location ) {
    $classes[] = 'nav-item';
  }

  return $classes;
}
add_filter( 'nav_menu_css_class', 'green_climat_nav_menu_css_class', 10, 4 );

function green_climat_nav_menu_link_attributes( $atts, $item, $args ) {
  if( 'main' == $args->theme_location ) {
    $atts['class'] = 'nav-link';
  }
  
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'green_climat_nav_menu_link_attributes', 10, 4 );

function green_climate_link_to( $title, $url, $color="#E68007" ) {
  echo  '<a href="' . esc_url( $url )  .  '" class="d-inline-flex align-items-center ml-auto font-weight-bold">' .
        '<span class="mr-2">' . $title . '</span>' .
        '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">' .
          '<path d="M8.97733 17.9547C13.9354 17.9547 17.9547 13.9354 17.9547 8.97733C17.9547 4.01929 13.9354 0 8.97733 0C4.01929 0 0 4.01929 0 8.97733C0 13.9354 4.01929 17.9547 8.97733 17.9547Z" fill="' . sanitize_hex_color( $color ) .'"/>' .
          '<path d="M7.88917 4.48865L6.39294 5.98487L9.43073 8.97731L6.39294 12.0151L7.88917 13.5113L12.4232 8.97731L7.88917 4.48865Z" fill="white"/>' .
        '</svg>' .
      '</a>';  
}


function green_climate_pagination() {
  $pages = paginate_links(
    array(
      'type'      => 'array',
      'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#0a8e86"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>',
      'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#0a8e86"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg>',
    )
  );
  if($pages != NULL) {
    echo '<div class="pagination">';
    foreach ($pages as $page) {
      $active = strpos($page, 'current') ? " active" : "";
      echo '<li class="page-item' . $active  . '">';
      echo str_replace( 'page-numbers', 'page-link', $page );
      echo "</li>";
    }
    echo "</div>";
  } else return;
}

?>