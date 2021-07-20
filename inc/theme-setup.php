<?php

function green_climate_theme_setup () {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails', array('post', 'page') );
  add_theme_support( 'widgets' );
  add_theme_support( 'custom-logo', array(
    'width'   => 350,
    'height'  => 100
  ) );
  add_image_size( 'logo', 350, 100 );
  add_theme_support( "html5", array(
    'search-form'
  ) );
  add_theme_support( 'post-formats', array('image', 'gallery', 'quote', 'audio', 'video') );
  add_post_type_support( 'page', array( 'excerpt', 'page-attributes', 'thumbnail' ) );

  load_theme_textdomain( "green-climate", get_template_directory_uri() . '/languages' );

  register_nav_menus( array(
    "main" => __( "Primaire", "green-climate" ),
    "secondary" => __( "Secondaire", "green-climate" )
  ) );
}

add_action( 'after_setup_theme', 'green_climate_theme_setup' );