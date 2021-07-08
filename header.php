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
        <div class="container d-flex justify-content-between align-items-center">
          <div>
            <span class="text-14">Fonds Vert pour le Climat</span>
            <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
              <g clip-path="url(#clip0)">
                <path d="M10.3 8.29999C9.40001 8.69999 8.50001 8.99999 7.70001 9.29999V16.4C8.50001 16.2 9.40001 15.9 10.3 15.4C17 12.3 20.2 16.2 20.2 16.2V8.99999C20.2 8.99999 17 5.09999 10.3 8.29999Z" fill="#3AAA35"/>
                <path d="M10.3 1.2C9.40001 1.7 8.50001 2 7.70001 2.2V9.3C8.50001 9.1 9.40001 8.8 10.3 8.3C17 5.1 20.2 9 20.2 9V2C20.2 2 17 -1.9 10.3 1.2Z" fill="#E30613"/>
                <path d="M0 1.70001V8.70001V15.7C0 15.7 2.7 17.7 7.7 16.3V9.30001V2.30001C2.7 3.70001 0 1.70001 0 1.70001Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0">
                <rect width="20.2" height="16.8" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <div>
            <?php
              wp_nav_menu( array(
                'container_class'    => 'd-none top-menu',
                'menu_class'      => 'mb-0 d-flex align-items-center justify-content-end list-unstyled',
                'theme_location' => 'secondary'
              ) );
            ?>
              <img class="ml-5" width="60" height="60" src="<?php echo esc_url( get_theme_mod( 'green-climate-logo' ) ) ?>" alt="" >
          </div>
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
