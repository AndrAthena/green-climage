<?php

get_header() ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<div>
  <div class="jumbotron text-white rounded-0" style="background: url(<?php get_the_post_thumbnail_url() ?>) var(--blue-color)">
    <div class="container">
      <?php the_title('<h1>', '</h1>'); ?>
      <?php if(has_excerpt()): ?>
        <p class="w-lg-75"><?php echo get_the_excerpt() ?></p>
      <?php endif; ?>
    </div>
  </div>
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