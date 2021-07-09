<?php get_header() ?>

<div class="inner">
  <div class="container">
    <?php if( have_posts()): the_post(); ?>
      <div class="py-3">
        <?php the_title('<h1>', '</h1>') ?>
        <div class="post-details">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" height="12" width="12" class="mr-2" fill="#00235a">
            <defs>
              <clipPath id="b">
                <path d="M0 90h90V0H0z" />
              </clipPath>
            </defs>
            <g clip-path="url(#b)" transform="matrix(1.33333 0 0 -1.33333 0 120)">
              <path d="M45 90C20.1 90 0 69.9 0 45S20.1 0 45 0s45 20.1 45 45-20.1 45-45 45m0-8c20.4 0 37-16.6 37-37S65.4 8 45 8 8 24.6 8 45s16.6 37 37 37"></path><path d="M62.3 46H46.9v17.4c0 2.2-1.8 4-4 4s-4-1.8-4-4V44c0-.4.1-.7.1-1-.1-.3-.1-.7-.1-1 0-2.2 1.8-4 4-4h19.4c2.2 0 4 1.8 4 4s-1.8 4-4 4" />
            </g>
          </svg>
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
        <?php get_template_part('/template-parts/content', 'sidebar') ?>
      </div>
    <?php endif ?>
  </div>
</div>
<?php get_footer() ?>
