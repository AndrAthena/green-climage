<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id, 'logo' );
 
if ( has_custom_logo() ) {
  if( is_front_page() ) {
    echo '<div class="navbar-brand">';
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
    echo '<img src="' . get_template_directory_uri() . '/assets/images/logo-text.svg" alt="Entité designé">';
    echo '</div>';
  } else { ?>
    <a class="navbar-brand" href="<?php echo home_url( '' ) ?>">
      <img src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php echo get_bloginfo( 'name' ) ?>">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-text.svg' ?>" alt="Entité designée">
    </a>
  <?php }
} else {
    echo '<a class="navbar-brand" href="' . home_url( '' ) . '">' . get_bloginfo('name') . '</a>';
}