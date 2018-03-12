<?php $posts = get_field('carousel_items'); ?>

<?php if($posts): ?>

  <div class="homepage-carousel owl-carousel">

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

      <?php setup_postdata($post); ?>

      <div class="homepage-carousel__item">

        <?php if(get_post_type() == 'project') { ?>
          <span class="homepage-carousel__item__label">Onderzoeksproject</span>
        <?php } elseif(get_post_type() == 'post') { ?>
          <span class="homepage-carousel__item__label">Nieuws</span>
        <?php } ?>

        <?php include(get_template_directory() . '/inc/homepage-carousel-card.php'); ?>

      </div>
      <!-- end .homepage-carousel__item -->

    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

  </div>
  <!-- end .homepage-carousel -->

<?php endif; ?>