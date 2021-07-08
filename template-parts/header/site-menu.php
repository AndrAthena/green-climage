<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#site-menu" aria-controls="site-menu" aria-expanded="false" aria-label="Toggle navigation">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
  </svg>
</button>

<div id="site-menu" class="collapse navbar-collapse">
  <?php
    wp_nav_menu( array(
      'container'           => null,
      'menu_id'             => 'secondary-menu',
      'menu_class'          => 'd-lg-none mb-0 list-unstyled',
      'theme_location'      => 'secondary'
    ) );
  ?>

  <?php
    wp_nav_menu( array(
      'container'         => null,
      'menu_class'				=> 'navbar-nav flex-grow-1',
      'theme_location'	 	=> 'main',
    ) );
  ?>
  <?php get_search_form() ?>
</div>

