<!DOCTYPE html>
<html <?php language_attributes () ?>>
<head>
  <meta charset="<?php bloginfo( "charset" ) ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head () ?>
</head>
<body>
  <main>
    <header id="header">
      <div class="bg-primary py-2 text-white">
        <div class="container text-right">
          <?php
            wp_nav_menu( array(
              'container_class'    => 'top-menu',
              'menu_class'      => 'mb-0 d-flex align-items-center justify-content-end list-unstyled',
              'theme_location' => 'secondary'
            ) );
            ?>
            <img class="ml-5" width="60" height="60" src="<?php echo esc_url( get_theme_mod( 'green-climate-logo' ) ) ?>" alt="" >
        </div>
      </div>
      <div class="container position-relative">
        <?php get_template_part( 'template-parts/header/social', 'media' ) ?>
        <nav class="navbar navbar-expand-lg align-items-end">
          <?php get_template_part( 'template-parts/header/custom', 'logo' ) ?>
          <?php get_template_part( 'template-parts/header/site', 'menu' ) ?>
        </nav>
      </div>
    </header>
</body>
</html>
