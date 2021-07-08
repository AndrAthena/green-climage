<?php get_header() ?>

<div class="inner">
  <div class="container">
    <?php if( have_posts()): the_post(); ?>
      <div class="py-3">
        <?php the_title('<h2>', '</h2>') ?>
        <div class="post-details">
          <span><?php _e('Publié le', 'green-climate') ?></span>&nbsp;<?php the_date('d.m.Y', '<span>', '</span>') ?>
        </div>
      </div>
      <div class="row">
        <article id="post-<?php the_ID() ?>" <?php post_class('col-lg-8') ?>>
        <p class="text-blue text-14">
          <?php echo get_the_excerpt() ?>
        </p>

          <?php if( has_post_thumbnail()) : the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php get_template_directory_uri() . '/assets/images/default.png' ?>" role="presentation" />
          <?php endif ?>
          
          <div class="mt-4">
            <?php the_content() ?>
          </div>
        </article>
        <?php endif; ?>
        <div class="col-lg-4">
          <?php if ( is_active_sidebar( 'sidebar-recent-post' ) ) : ?>
            <?php dynamic_sidebar('sidebar-recent-post'); ?>
        </div>
      </div>
    <?php endif ?>
  </div>
</div>
<?php get_footer() ?>
