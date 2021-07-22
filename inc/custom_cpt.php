<?php

function green_climate_custom_post_type() {
  $args_projet = array(
    'labels'                => array(
      'name'                => __('Projets', 'green-climate'),
      'singular_name'       => __('Projet', 'green-climate'),
      'add_new'             => __('Ajouter', 'green-climate'),
      'add_new_item'        => __('Ajouter un nouveau projet', 'green-climate'),
      'edit_item'           => __('Editer un projet', 'green-climate'),
      'new_item'            => __('Nouveau projet', 'green-climate'),
      'all_items'           => __('Tous les projets', 'green-climate'),
      'view_item'           => __('Voir les projets', 'green-climate'),
      'search_items'        => __('Rechercher projets', 'green-climate'),
      'not_found'           => __('Projets non trouvés', 'green-climate'),
      'not_found_in_trash'  => __('Projets non trouvés dans la corbeille', 'green-climate'),
      'parent_item_colon'   => '',
      'menu_name'           => __('Projets', 'green-climate')
    ),
    'description'           => "",
    'exclude_from_search'   => false,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_nav_menus'     => true,
    'show_in_menu'          => true,
    'show_in_admin_bar'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'projet' ),
    'capability_type'       => 'post',
    'menu_icon'             => 'dashicons-clipboard',
    'has_archive'           => true,
    'hierarchical'          => false,
    'menu_position'         => 20,
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'can_export'            => true,
  );
  register_post_type( 'projet', $args_projet );

  $args_agenda = array(
    'labels'                => array(
      'name'                => __('Agenda', 'green-climate'),
      'singular_name'       => __('Agenda', 'green-climate'),
      'add_new'             => __('Ajouter', 'green-climate'),
      'add_new_item'        => __('Ajouter nouvel agenda', 'green-climate'),
      'edit_item'           => __('Editer un agenda', 'green-climate'),
      'new_item'            => __('Nouvel agenda', 'green-climate'),
      'all_items'           => __('Tous les agendas', 'green-climate'),
      'view_item'           => __('Voir les agendas', 'green-climate'),
      'search_items'        => __('Rechercher agendas', 'green-climate'),
      'not_found'           => __('Agendas non trouvés', 'green-climate'),
      'not_found_in_trash'  => __('Agendas non trouvés dans la corbeille', 'green-climate'),
      'parent_item_colon'   => '',
      'menu_name'           => __('Agendas', 'green-climate')
    ),
    'description'           => "",
    'exclude_from_search'   => false,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_nav_menus'     => true,
    'show_in_menu'          => true,
    'show_in_admin_bar'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'agendas' ),
    'capability_type'       => 'post',
    'menu_icon'             => get_template_directory_uri() . '/assets/images/calendar.svg',
    'has_archive'           => true,
    'hierarchical'          => false,
    'menu_position'         => 20,
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'can_export'            => true,
  );
  register_post_type( 'agenda', $args_agenda );

  $args_entite = array(
    'labels'                => array(
      'name'                => __('Entité', 'green-climate'),
      'singular_name'       => __('Entité', 'green-climate'),
      'add_new'             => __('Ajouter', 'green-climate'),
      'add_new_item'        => __('Ajouter une nouvelle entité', 'green-climate'),
      'edit_item'           => __('Editer une entité', 'green-climate'),
      'new_item'            => __('Nouvelle entité', 'green-climate'),
      'all_items'           => __('Toutes les entités', 'green-climate'),
      'view_item'           => __('Voir les entités', 'green-climate'),
      'search_items'        => __('Rechercher entités', 'green-climate'),
      'not_found'           => __('Entités non trouvées', 'green-climate'),
      'not_found_in_trash'  => __('Entités non trouvées dans la corbeille', 'green-climate'),
      'parent_item_colon'   => '',
      'menu_name'           => __('Entités', 'green-climate')
    ),
    'description'           => "",
    'exclude_from_search'   => false,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_nav_menus'     => true,
    'show_in_menu'          => true,
    'show_in_admin_bar'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'agenda' ),
    'capability_type'       => 'post',
    'menu_icon'             => 'dashicons-networking',
    'has_archive'           => true,
    'hierarchical'          => false,
    'menu_position'         => 20,
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'can_export'            => true,
  );
  register_post_type( 'entite', $args_entite );
}

add_action( 'init', 'green_climate_custom_post_type' );