<?php

function green_climate_register_widget() {
  register_sidebar(
    array(
      'name'          => __('Sidebar', 'green-climate'),
      'id'            => 'sidebar-recent-post',
      'before_widget' => '<div id="%1$s" class="sidebar-recent-post border p-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    )
  );
}

add_action( 'widgets_init', 'green_climate_register_widget' );