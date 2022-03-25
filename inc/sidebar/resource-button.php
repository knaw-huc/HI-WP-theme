<?php if(get_field('sidebar_resource_url')): ?>

  <div class="sidebar__item">

    <div class="sidebar__item__body">

      <a href="<?php the_field('sidebar_resource_url'); ?>" target="_blank" class="sidebar__item__button sidebar__item__button--outgoing">
        <?php _e('Bekijk resource', 'huygens'); ?>
      </a>
      <!-- end .sidebar__item__button -->

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>