<?php

$page = get_queried_object();

if($page) {
  $image_id = get_post_thumbnail_id( $page->ID );
  $image_url = wp_get_attachment_image_src( $image_id, 'post-thumbnail' );
}

?>

<div id="banner" class="bg-grey" style="background-image: url(<?php echo esc_url( $image_url[0] ) ?>)">
  <div class="overlay"></div>
  <div class="container h-100">
    <div class="d-flex h-100">
      <h1 class="text-white align-self-end"><?php the_title() ?></h1>
    </div>
  </div>
</div>