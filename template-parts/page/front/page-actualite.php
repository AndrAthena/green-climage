<section id="actualite">
  <div class="inner">
    <div class="container">
      <div class="heading row">
        <h2>Actualités</h2>
        <?php green_climate_link_to( 'Voir plus d\'articles', get_post_type_archive_link( 'post' ) ) ?>
      </div>
      <div class="row">
        <?php
          $args = array(
            'post_per_page=1' => 1,
            'post_type'       => 'post',
          );
          $alaune =  get_posts( $args );
        ?>
        <?php if( count( $alaune ) > 0 ): $actus = $alaune[0] ?>
        <div class="col-md-5">
          <h3>A la une</h3>
          <?php if( has_excerpt( $actus ) ): echo $actus->post_excerpt ?>
          <?php else : ?>
            <article class="w-100 post-content line-clamp-8 mb-2"><?php echo $actus->post_content ?></article>
          <?php endif; ?>
          <?php green_climate_link_to( 'Afficher la suite', get_the_permalink( $actus ) ); ?>
        </div>
        <div class="col-md-7">
          <?php if( has_post_thumbnail( $actus ) ): ?>
            <img src="<?php echo get_the_post_thumbnail_url( $actus ) ?>" />
          <?php else: ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default.png' ) ?>" />
          <?php endif ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata() ?>
      </div>
    </div>
  </div>
</section>