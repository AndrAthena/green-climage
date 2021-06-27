<?php

function green_climate_customize( WP_Customize_Manager $wp_customize ) {
  global $post;
  $green_climate_posts = array();
  $green_climate_obj_posts = get_posts( 'post_per_page=-1' );
  $green_climate_posts[''] = esc_html__( 'Choose post', 'green-climate' );
  foreach ($green_climate_obj_posts as $green_climate_post) {
    $green_climate_posts[ $green_climate_post->ID ] = $green_climate_post->post_title;
  }


  $wp_customize->add_panel( 'wp_default_panel', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Default Settings', 'green-climate' ),
    'description'    => '',
  ) );

  $wp_customize->get_section( 'title_tagline' )->panel    = 'wp_default_panel';
  $wp_customize->get_section( 'custom_css' )->panel       = 'wp_default_panel';
  $wp_customize->get_section( 'static_front_page' )->panel       = 'wp_default_panel';

  /** Panel: Social media */
  $wp_customize->add_panel( 'green-climate-section-social', array(
    'priority'        => 10,
    'capability'      => 'edit_theme_options',
    'theme_supports'  => '',
    'title'          => __( 'Header', 'green-climate' ),
    'description'    => ''
  ) );

  /** Logo parrain */
  $wp_customize->add_section( 'green-climate-logo', array(
    'title'       => __( 'Logo parrain', 'green-climate' ),
    'description' => __( 'Logo du parrain ', 'green-climate' ),
    'panel'       => 'green-climate-section-social'
  ) );

  $wp_customize->add_setting( 'green-climate-logo', array(
    'default'           => '',
  ) );
  
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'green-climate-logo', array(
    'label'     => __( 'Logo', 'green-climate' ),
    'section'   => 'green-climate-logo',
    'settings'  => 'green-climate-logo'
  ) ) );

  $wp_customize->add_section( 'green-climate-social', array(
    'title'       => __( 'Social media', 'green-climate' ),
    'description' => __( 'Link for social media network', 'green-climate' ),
    'panel'       => 'green-climate-section-social'
  ) );

  $wp_customize->add_section( 'green-climate-social', array(
    'title'       => __( 'Social media', 'green-climate' ),
    'description' => __( 'Link for social media network', 'green-climate' ),
    'panel'       => 'green-climate-section-social'
  ) );
    
  /** Facebook */
  $wp_customize->add_setting( 'green-climate-social-facebook', array(
    'default'           => 'https://www.facebook.com',
    'sanitize_callback' => 'sanitize_trackback_urls'
  ) );

  $wp_customize->add_control( 'green-climate-social-facebook', array(
    'label'     => __( 'Facebook', 'green-climate' ),
    'section'   => 'green-climate-social',
    'settings'  => 'green-climate-social-facebook',
    'type'      => 'text'
  ) );
  
  /** Youtube */
  $wp_customize->add_setting( 'green-climate-social-youtube', array(
    'default'           => 'https://www.youtube.com',
    'sanitize_callback' => 'sanitize_trackback_urls'
  ) );

  $wp_customize->add_control( 'green-climate-social-youtube', array(
    'label'     => __( 'Youtube', 'green-climate' ),
    'section'   => 'green-climate-social',
    'settings'  => 'green-climate-social-youtube',
    'type'      => 'text'
  ) );

  /** Linkedin */
  $wp_customize->add_setting( 'green-climate-social-linkedin', array(
    'default'           => 'https://www.linkedin.com',
    'sanitize_callback' => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'green-climate-social-linkedin', array(
    'label'     => __( 'Linkedin', 'green-climate' ),
    'section'   => 'green-climate-social',
    'settings'  => 'green-climate-social-linkedin',
    'type'      => 'text'
  ) );

  /** Contact */
  $wp_customize->add_section( 'green-climate-contact', array(
    'title'       => __( 'Contact', 'green-climate' ),
    'description' => __( 'Contact page', 'green-climate' ),
    'panel'       => 'green-climate-section-social'
  ) );

  $wp_customize->add_setting( 'green-climate-social-contact', array(
    'default'           => '',
  ) );
  
  $wp_customize->add_control( 'green-climate-social-contact', array(
    'label'     => __( 'Contact url', 'green-climate' ),
    'section'   => 'green-climate-contact',
    'settings'  => 'green-climate-social-contact',
    'type'      => 'dropdown-pages'
  ) );

  /** Home page */
  $wp_customize->add_panel( 'green-climate-panel-home', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Homepage', 'green-climate' ),
    'description'    => '',
  ) );

  /** Promoted page */
  $wp_customize->add_section( 'green-climate-homepage', array(
    'title'       => __( 'Hero section', 'green-climate' ),
    'description' => __( 'Hero section', 'green-climate' ),
    'panel'       => 'green-climate-panel-home'
  ) );

  $wp_customize->add_setting( 'green-climate-promoted-page', array(
    'default' => ''
  ) );

  $wp_customize->add_control( 'green-climate-promoted-page', array(
    'label'     => __( 'Promoted page', 'green-climate' ),
    'section'   => 'green-climate-homepage',
    'settings'  => 'green-climate-promoted-page',
    'type'      => 'dropdown-pages',
  ) );

  /** Text section */
  $wp_customize->add_section( 'green-climate-homepage-text-section', array(
    'title'       => __( 'Post Promoted section', 'green-climate' ),
    'description' => __( 'Post Promoted section', 'green-climate' ),
    'panel'       => 'green-climate-panel-home'
  ) );

  $wp_customize->add_setting( 'green-climate-text-section', array(
    'default' => ''
  ) );

  $wp_customize->add_control( 'green-climate-text-section', array(
    'label'     => __( 'Choose post', 'green-climate' ),
    'section'   => 'green-climate-homepage-text-section',
    'settings'  => 'green-climate-text-section',
    'type'      => 'select',
    'choices'   => $green_climate_posts
  ) );
}

add_action( 'customize_register', 'green_climate_customize' );