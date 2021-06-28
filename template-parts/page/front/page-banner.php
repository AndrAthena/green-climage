<?php
$banner = get_theme_mod( 'green-climate-promoted-page' );
$page = get_posts( array(
  'post_type' => 'page',
  'include'   => array( $banner )
) );

$page = $page[0];
?>

<section id="hero-banner" style="background: url( <?php echo get_the_post_thumbnail_url( $page->ID ) ?> ) center / cover no-repeat">
  <div class="inner">
    <div class="container text-white">
      <h2 class="text-right text-uppercase"><?php echo $page->post_title ?></h2>
      <h3 class="text-right"><?php echo $page->post_excerpt ?></h3>
      <div class="mt-3 text-right">
        <?php green_climate_link_to( 'Afficher la suite', get_post_type_archive_link( 'post' ), '#0A8E86' ) ?>
      </div>
    </div>
  </div>
</section>

<?php wp_reset_postdata() ?>