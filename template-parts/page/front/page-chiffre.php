<?php
$company = get_theme_mod('green-climate-company-section');
$page = get_posts( array(
  'post_type' => 'page',
  'include'   => array($company)
));
?>

<section id="chiffre" class="bg-primary text-white">
  <div class="inner">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <?php if($page): $page = $page[0] ?>
            <div class="heading">
              <h2><?php echo $page->post_title ?></h2>
            </div>
            <article>
              <?php echo wp_trim_words($page->post_content, 100)  ?>
            </article>
            <div class="mt-3">
            <?php green_climate_link_to('Afficher la suite', get_the_permalink($page)) ?>
            </div>
          <?php endif ?>
          <?php wp_reset_postdata() ?>
        </div>
        <div class="col-md-7">
          <div class="row">
            <?php

            $args = array(
              'post_type'     => 'chiffre',
              'posts_per_page' => 6
            );
            $query = new WP_Query( $args );

            if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>

              <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center mb-3">
                <?php the_post_thumbnail( 'post-thumbnail', array('class' => 'mb-3') ) ?>
                <div class="mt-auto text-center">
                  <?php the_title('<h5>', '</h5>'); ?>
                  <p class="text-12">
                    <?php echo wp_trim_words( get_the_content(), 20 ) ?>
                  </p>
                </div>
              </div>

            <?php endwhile; endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>