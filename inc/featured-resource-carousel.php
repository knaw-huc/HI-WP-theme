<?php $posts = get_field('featured_resources', 'options'); ?>

<?php if($posts): ?>

  <div class="page-intro__carousel owl-carousel">

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

      <?php setup_postdata($post); ?>

      <?php include(get_template_directory() . '/inc/homepage-resource-card.php'); ?>

    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

  </div>
  <!-- end .page-intro__carousel -->

<?php endif; ?>