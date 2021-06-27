<?php

$text_section = get_theme_mod( 'green-climate-text-section' );

$page = get_posts( array( 'include' => array( $text_section ) ) );

$page = count( $page ) ? $page[0] : null;

?>

<section>
  <div class="inner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php if( $page ) : ?>
            <h2 class="post-title"><?php echo $page->post_title ?></h2>
            <p class="text-justify"><?php echo wp_trim_words( $page->post_content, 150 ) ?></p>
            <?php green_climate_link_to( 'Afficher la suite', get_the_permalink( $page->ID ) ) ?>
          <?php else: ?>
            <h2 class="post-title"><?php echo "Titre de la section" ?></h2>
            <p class="text-justify"><?php echo "Paragraphe de la section" ?></p>
          <?php endif; ?>
        </div>
        <div class="col-md-6">
        <?php if( $page && has_post_thumbnail( $page->ID ) ): ?>
          <img src="<?php echo get_the_post_thumbnail_url( $page->ID ) ?>" alt="">
        <?php else: ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default.png' ) ?>" alt="">
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>