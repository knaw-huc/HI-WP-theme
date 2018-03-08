<?php if( have_rows('sidebar_related_publications') ): ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Gerelateerde publicaties</h4>

    <div class="sidebar__item__body">

      <?php while ( have_rows('sidebar_related_publications') ) : the_row(); ?>

        <a href="<?php the_sub_field('url'); ?>" target="_blank" class="sidebar__item__text-link">
          <?php the_sub_field('title'); ?>
        </a>
        <!-- end .sidebar__item__text-link -->

      <?php endwhile; ?>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>