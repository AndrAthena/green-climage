<?php

function green_climate_customize( WP_Customize_Manager $wp_customize ) {
  $wp_customize->add_panel( 'wp_default_panel', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Paramètre par défaut', 'green-climate' )
  ) );

  $wp_customize->get_section( 'title_tagline' )->panel      = 'wp_default_panel';
  $wp_customize->get_section( 'custom_css' )->panel         = 'wp_default_panel';
  $wp_customize->get_section( 'static_front_page' )->panel  = 'wp_default_panel';

  /** Panel: Social media */
  $wp_customize->add_panel( 'green-climate-section-parent', array(
    'priority'        => 10,
    'capability'      => 'edit_theme_options',
    'theme_supports'  => '',
    'title'          => __( 'Ministère', 'green-climate' ),
    'description'    => ''
  ) );

  /** Logo parrain */
  $wp_customize->add_section( 'green-climate-logo', array(
    'title'       => __( 'Logo ministère', 'green-climate' ),
    'panel'       => 'green-climate-section-parent'
  ) );

  $wp_customize->add_setting( 'green-climate-logo', array(
    'default'           => '',
  ) );
  
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'green-climate-logo', array(
    'label'     => __( 'Logo', 'green-climate' ),
    'section'   => 'green-climate-logo',
    'settings'  => 'green-climate-logo'
  ) ) );
}

add_action( 'customize_register', 'green_climate_customize' );

?>