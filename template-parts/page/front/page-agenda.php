<section id="agenda">
  <div class="inner">
    <div class="container">
      <div class="heading row">
        <h2>Agenda</h2>
        <?php green_climate_link_to( 'Voir tout', get_post_type_archive_link( 'agenda' ) ) ?>
      </div>

      <div class="row agenda-list">
      <?php
        $args = array(
          'post_type'       => 'agenda',
          'posts_per_page'  => -1,
          'post_status'     => 'publish',
          'meta_key'        => 'date_evenement',
          'orderby'         => 'meta_value',
          'order'           => 'ASC'
        );
        $agenda = new WP_Query( $args );

        if ( $agenda-> have_posts() ) : while ( $agenda-> have_posts() ) : $agenda->the_post();
      ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-header bg-blue d-flex align-items-center">
              <svg class="mr-3" width="32" height="32" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M43.0317 5.20676C42.9336 5.20278 42.8354 5.20211 42.7372 5.20488H39.036V2.02413C39.0361 0.751825 37.8216 0 36.5493 0H33.1373C31.865 0 30.9397 0.751825 30.9397 2.02413V5.20477H17.0602V2.02413C17.0602 0.751825 16.1349 0 14.8626 0H11.4505C10.1783 0 8.96379 0.751825 8.96379 2.02413V5.20477H5.26267C2.90004 5.13891 0.931374 7.00087 0.865512 9.36338C0.862744 9.46146 0.863409 9.55975 0.867393 9.65783V43.0843C0.867393 45.6289 2.71795 47.9999 5.26256 47.9999H42.7373C45.2819 47.9999 47.1325 45.6289 47.1325 43.0843V9.65783C47.2293 7.29631 45.3932 5.30351 43.0317 5.20676ZM33.1373 2.31326H36.7229V8.67465H33.1373V2.31326ZM11.4506 2.31326H14.747V8.67465H11.4506V2.31326ZM44.8193 43.0843C44.8193 44.3566 44.0096 45.6866 42.7373 45.6866H5.26267C3.99037 45.6866 3.18076 44.3566 3.18076 43.0843V18.506H44.8193V43.0843ZM44.8193 9.65783V16.1928H3.18065V9.65783C3.08269 8.57636 3.88001 7.6202 4.96147 7.52223C5.06154 7.51316 5.16227 7.51183 5.26256 7.51814H8.96379V8.79044C8.96379 10.0627 10.1782 10.988 11.4505 10.988H14.8626C16.0439 11.0205 17.0278 10.089 17.0602 8.90766C17.0613 8.86859 17.0613 8.82951 17.0602 8.79044V7.51803H30.9397V8.79033C30.9073 9.97164 31.8388 10.9555 33.0201 10.9879C33.0592 10.989 33.0982 10.989 33.1373 10.9879H36.5494C37.8217 10.9879 39.0361 10.0626 39.0361 8.79033V7.51803H42.7373C43.8211 7.44973 44.7551 8.27295 44.8233 9.35674C44.8297 9.45703 44.8283 9.55776 44.8193 9.65783Z" fill="white"/>
                <path d="M17.5807 34.2939L16.5397 40.077C16.4986 40.3251 16.5393 40.5799 16.6558 40.8027C16.952 41.3687 17.6509 41.5875 18.2168 41.2914L23.4216 38.5734L28.6264 41.2914L29.1469 41.4071C29.3978 41.4115 29.6428 41.3298 29.8408 41.1758C30.1865 40.9233 30.3644 40.5006 30.3035 40.0769L29.2625 34.2938L33.4842 30.2456C33.7863 29.9192 33.8959 29.4587 33.7734 29.0312C33.6176 28.636 33.2667 28.351 32.8481 28.2794L27.0649 27.4119L24.4626 22.1492C24.3491 21.915 24.16 21.7258 23.9258 21.6125C23.3509 21.3341 22.6592 21.5744 22.3807 22.1492L19.7783 27.4119L13.9951 28.2794C13.5765 28.3509 13.2256 28.636 13.0699 29.0312C12.9473 29.4587 13.057 29.9192 13.359 30.2456L17.5807 34.2939ZM20.7614 29.6096C21.1246 29.5552 21.4323 29.3135 21.571 28.9734L23.4216 25.2722L25.2722 28.9734C25.411 29.3135 25.7186 29.5552 26.0818 29.6096L30.1878 30.1878L27.2384 33.0216C26.9637 33.2935 26.8348 33.6801 26.8914 34.0625L27.5853 38.1686L23.942 36.2023L23.4215 36.0867L22.901 36.2023L19.2577 38.1686L19.9516 34.0625C20.0083 33.6801 19.8793 33.2935 19.6046 33.0216L16.6552 30.1878L20.7614 29.6096Z" fill="white"/>
              </svg>
              <span class="text-white font-weight-bold"><?php echo get_field( 'date_evenement' ) ?></span>
            </div>
            <div class="card-body">
              <?php the_title('<h5 class="text-uppercase">', '</h5>') ?>
              <?php
                if( has_excerpt() ) echo '<p>' .  wp_trim_excerpt( get_the_excerpt() ) . '</p>';
                else echo '<p>' . wp_trim_words( get_the_content(), 20 ) . '</p>';
              ?>
              <?php green_climate_link_to( 'Voir plus', get_the_permalink() ) ?>
            </div>
          </div>
        </div>
      <?php endwhile; endif; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>