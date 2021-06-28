<section id="project" class="bg-blue">
<div class="inner">
  <div class="container">
    <div class="heading">
      <h2 class="text-white">Projets</h2>
    </div>
  </div>

  <div class="project-list">
    <?php
      $args = array(
        'post_type'   => 'projet',
        'post_status' => 'publish'
      );
      $projets = get_posts( $args );

      foreach ($projets as $projet): ?>
        <div class="card border-0 bg-transparent">
          <img class="post-thumbnail" src="<?php echo get_the_post_thumbnail_url( $projet ) ?>" alt="<?php echo $projet->post_title ?>">
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata() ?>
  </div>
  
  <div class="container">
    <div class="navigation d-inline-flex bg-white"></div>
  </div>
</div>
</section>