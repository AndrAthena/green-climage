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