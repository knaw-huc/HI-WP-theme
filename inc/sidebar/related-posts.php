<?php $posts = get_field('sidebar_related_posts'); ?>

<?php if($posts): ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Gerelateerd nieuws</h4>

    <div class="sidebar__item__body">

      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

        <?php setup_postdata($post); ?>

        <a href="<?php the_permalink(); ?>" class="sidebar__item__text-link">
          <?php the_title(); ?>
        </a>
        <!-- end .sidebar__item__text-link -->

      <?php endforeach; ?>

      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>