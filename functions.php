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

$includes = array( '/inc/hook.php', '/inc/theme-setup.php', '/inc/enqueue.php', '/inc/customize.php', '/inc/custom_cpt.php', '/inc/widget.php' );

foreach ($includes as $include) {
  $include = locate_template( $include );
  load_template( $include );
}

function green_climate_pagination() {
  global $wp_query;
  $pages = paginate_links(
    array(
      'total'     => $wp_query->max_num_pages,
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
  if(!is_admin() && $query->is_main_query() && is_post_type_archive('agenda')) {
    $query->set('posts_per_page', 9);
  }
}
add_action('pre_get_posts', 'green_climate_pre_get_posts');