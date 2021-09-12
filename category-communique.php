<?php

/**
 * Template Name: Category communique
 */

get_header() ?>

<div class="container">
  <div class="row">
    <?php

    $paged = get_query_var('page') ? get_query_var('page') : 1;
    $args = array(
      'posts_per_page'  => 6,
      'post_type'       => 'post',
      'paged'           => $paged
    );
    $new_query = new WP_Query( $args );

    if( $new_query->have_posts() ):
      while( $new_query->have_posts() ):
        $new_query->the_post(); ?>

          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card border-0 rounded-0">
              <?php if( has_post_thumbnail() ):
                the_post_thumbnail( 'post-thumbnail', array( 'class' => 'card-img-top img-fluid rounded-0', 'alt' => get_the_title() ) );
              else: ?>
                <img src="https://via.placeholder.com/350x220" alt="<?php the_title() ?>" class="card-img-top img-fluid rounded-0">
              <?php endif; ?>
              <div class="card-body">
                <?php foreach (get_the_category() as $cat) {
                    echo '<span class="mb-2 py-1 px-2 badge badge-primary bg-primary">'. $cat->name . '</span>';
                } ?>
                <h5 class="card-title"><?php echo get_the_title() ?></h5>
                <?php if( has_excerpt() ) : ?>
                  <p class="card-text line-clamp-4 mb-3"><?php echo wp_trim_words( get_the_excerpt(), 20 ) ?></p>
                <?php else: ?>
                  <p class="card-text line-clamp-4 mb-3"><?php echo wp_trim_words( get_the_content(), 20 ) ?></p>
                <?php endif; ?>
                <a href="<?php the_permalink() ?>" class="text-blue font-weight-bold">Voir l'article</a>
                </div>
            </div>
          </div>
    
      <?php endwhile; endif; ?>
      <?php wp_reset_postdata(); ?>
  </div>
</div>

?>

<?php get_footer() ?>