<?php

/**
 * Add bootstrap menu item class
 */
function green_climate_nav_menu_css_class( $classes, $item, $args ) {
  if( 'main' == $args->theme_location ) {
    $classes[] = 'nav-item';
  }

  return $classes;
}
add_filter( 'nav_menu_css_class', 'green_climate_nav_menu_css_class', 10, 4 );

/**
 * 
 */
function green_climate_walker_nav_menu_start_el( $output, $item, $depth, $args ) {
  if( '#' == $item->url) {
    $output = preg_replace( '/<a.*>(.*)<\/a>/', '<span class="mr-2">$1</span>', $output );
    $output .= '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>';
  }
  if( $item->menu_item_parent) {
    $output .= '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg>';
  }

  return $output;
}
add_filter( 'walker_nav_menu_start_el', 'green_climate_walker_nav_menu_start_el', 10, 4 );

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

function green_climate_pre_get_posts($query) {
  if(!is_admin() && $query->is_main_query() && is_post_type_archive( 'agenda' ) || is_category()) {
    $query->set('posts_per_page', 9);
  }
}

add_action( 'pre_get_posts','green_climate_pre_get_posts' );

?>