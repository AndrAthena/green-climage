<?php

/**
 * Template Name: Full width
 */

get_header() ?>

<div class="inner">
  <div class="container-fluid">

  <?php if( have_posts() ): while( have_posts() ): the_post();

  the_title('<h2>', '</h2>');
  the_content();

  endwhile; endif ?>

  </div>
</div>
<?php get_footer() ?>