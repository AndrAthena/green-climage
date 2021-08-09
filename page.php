<?php

get_header();

get_template_part( 'template-parts/banner', '' );

if( have_posts() ): while( have_posts() ): the_post(); ?>
  
  <div class="inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <article>
            <?php the_content(); ?>
          </article>
        </div>
        <?php get_template_part('/template-parts/content', 'sidebar') ?>
      </div>
    </div>
  </div>

<?php endwhile; endif ?>
<?php get_footer() ?>