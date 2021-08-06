<header>
  <div class="bg-primary d-none d-lg-block">
    <div class="container top-menu-wrapper">
      <div class="text-white">
        <span class="mr-1 text-14">Fonds Vert pour le climat</span>
        <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.3 8.29999C9.40001 8.69999 8.50001 8.99999 7.70001 9.29999V16.4C8.50001 16.2 9.40001 15.9 10.3 15.4C17 12.3 20.2 16.2 20.2 16.2V8.99999C20.2 8.99999 17 5.09999 10.3 8.29999Z" fill="#3AAA35"></path>
          <path d="M10.3 1.2C9.40001 1.7 8.50001 2 7.70001 2.2V9.3C8.50001 9.1 9.40001 8.8 10.3 8.3C17 5.1 20.2 9 20.2 9V2C20.2 2 17 -1.9 10.3 1.2Z" fill="#E30613"></path>
          <path d="M0 1.70001V8.70001V15.7C0 15.7 2.7 17.7 7.7 16.3V9.30001V2.30001C2.7 3.70001 0 1.70001 0 1.70001Z" fill="white"></path>
        </svg>
      </div>
      
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'secondary',
            'container_class' => 'ml-auto',
            'menu_class'      => 'top-menu list-unstyled text-white',
          )
        );
      ?>
  
      <div class="ml-3 parrain">
        <?php if( get_theme_mod( 'green-climate-logo' ) ): ?>
          <img src="<?php echo get_theme_mod( 'green-climate-logo' ) ; ?>" alt="Ministère de l'environnement" />
        <?php else: ?>
          <img src="https://via.placeholder.com/56" alt="Logo ministère" class="bg-grey rounded-circle" />
        <?php endif ?>
      </div>
    </div>

  </div>
  <div class="main-menu-container">
    <div class="container">
      <nav class="navbar navbar-light">
        <?php get_template_part( 'template-parts/header/custom', 'logo' ) ?>
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'main',
              'container'       => null,
              'menu_class'      => 'd-none d-lg-flex list-unstyled main-menu align-self-end mb-3',
            )
          );
        ?>
        <button type="button" class="d-inline-block d-lg-none btn menu-toggler not-active bg-transparent">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </nav>
    </div>
  </div>
  </div>
  <div class="menu-mobile d-block d-lg-none">
    <button class="btn menu-back bg-transparent">
      <svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 24 24" width="14" fill="#000000">
        <path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M17.51 3.87L15.73 2.1 5.84 12l9.9 9.9 1.77-1.77L9.38 12l8.13-8.13z"/>
      </svg>
      <span class="text-14">Retour</span>
    </button>
    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'secondary',
          'menu_class'      => 'list-unstyled',
          'container'       => null
        )
      );
      wp_nav_menu(
        array(
          'theme_location'  => 'main',
          'menu_class'      => 'list-unstyled',
          'container'       => null
        )
      );
    ?>
  </div>
</header>
