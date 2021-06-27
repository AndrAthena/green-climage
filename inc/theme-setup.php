<?php

function green_climat_theme_setup () {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'widgets' );
  add_theme_support( 'custom-logo', array(
    'width'   => 350,
    'height'  => 100
  ) );
  add_image_size( 'logo', 350, 100 );
  add_theme_support( "html5", array(
    'search-form'
  ) );
  add_post_type_support( 'page', array( 'excerpt' ) );

  load_textdomain( "green-climat", get_template_directory_uri() . '/languages' );

  register_nav_menus( array(
    "main" => __( "Primaire", "green-climat" ),
    "secondary" => __( "Secondaire", "green-climat" )
  ) );
}

add_action( 'after_setup_theme', 'green_climat_theme_setup' );