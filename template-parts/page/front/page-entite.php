<section id="entite">
  <div class="inner">
    <div class="container">
      <div class="heading w-50">
        <h2>Entités Nationales Accréditées</h2>
      </div>
      <div class="row">
        <?php

        $args = array(
          'post_type'     => 'entite',
          'posts_per_page' => 5
        );
        $query = new WP_Query( $args );

        if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>

          <div class="col-lg-2">
            <?php the_post_thumbnail( 'post-thumbnail', array('class' => 'mb-3') ) ?>
            <div>
              <?php the_title('<h5>', '</h5>'); ?>
              <p class="text-12">
                <?php echo wp_trim_words( get_the_content(), 10 ) ?>
              </p>
            </div>
          </div>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata() ?>
      </div>
    </div>
  </div>
</section>