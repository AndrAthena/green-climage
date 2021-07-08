<?php get_header() ?>

<div class="inner">
  <div class="container">
    <h2 class="mb-4">Actualités</h2>
    <div class="row">
      <div class="col-md-8">
        
        <?php

        $paged = get_query_var('page') ? get_query_var('page') : 1;
        $args = array(
          'posts_per_page'  => 2,
          'post_type'       => 'post',
          'paged'           => $paged
        );
        $new_query = new WP_Query( $args );

        if( $new_query->have_posts() ): while( $new_query->have_posts() ): $new_query->the_post(); ?>

        <article id="post-<?php the_ID() ?>" <?php post_class('post-article') ?>>
          <div class="post-img">
            <?php if( has_post_thumbnail() ): ?>
              <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) ?>" alt="<?php echo get_the_title() ?>">
            <?php else: ?>
              <img src="<?php echo esc_url('https://via.placeholder.com/150x160/DDD/0A8E86?text=Green-Climate') ?>" alt="<?php echo get_the_title() ?>">
            <?php endif; ?>
          </div>
          <div class="post-content">
            <p class="post-tag">
              <span class="post-category"><?php the_category(', ') ?></span>
              <span class="post-date">| <?php the_time( 'd.m.Y' ) ?></span>
            </p>
            <h3>
              <a class="post-link" href="<?php the_permalink() ?>">
                <?php echo get_the_title() ?>
              </a>
            </h3>
            <p class="post-exceprt">
              <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
            </p>
          </div>
        </article>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </div>
    <div class="pagination">
      <?php echo paginate_links(
        array(
          'base'      => get_pagenum_link(1) . '%_%',
          'total'     => $new_query->max_num_pages,
          'mid_size'  => 2,
          'prev_text' => __('Précédent', 'green-climate' ),
          'next_text' => __('Suivant', 'green-climate' ),
        )
      ) ?>
    </div>
  </div>
</div>

<?php get_footer() ?>