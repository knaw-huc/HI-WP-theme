<?php $posts = get_field('sidebar_related_profiles'); ?>

<?php if($posts): ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Gerelateerde medewerkers</h4>

    <div class="sidebar__item__body">

      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

        <?php setup_postdata($post); ?>

        <?php include(get_template_directory() . '/inc/profile-button.php'); ?>

      <?php endforeach; ?>

      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>