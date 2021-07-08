<?php get_header() ?>

<div class="inner">
  <div class="container">
    <div class="row">
      <?php if( have_posts()): the_post(); ?>
      <article id="post-<?php the_ID() ?>" <?php post_class('col-md-8') ?>>
        <?php the_title('<h2>', '</h2>') ?>
        <?php if( has_post_thumbnail()) : the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php get_template_directory_uri() . '/assets/images/default.png' ?>" role="presentation" />
        <?php endif ?>
        <div class="post-details">
          <span><?php _e('Publié le', 'green-climate') ?></span>&nbsp;<?php the_date('d.m.Y', '<span>', '</span>') ?>
        </div>
        
        <div class="mt-4">
          <?php the_content() ?>
        </div>
      </article>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer() ?>
