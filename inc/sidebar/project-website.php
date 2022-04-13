<?php if ( get_field('project_website') ) : ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading hide-on-desktop"><?php _e('Project', 'huygens'); ?></h4>

    <div class="sidebar__item__body">

      <a href="<?php echo get_field('project_website'); ?>" target="_blank" class="sidebar__item__button sidebar__item__button--outgoing">
        <?php _e('Bezoek projectwebsite', 'huygens'); ?>
      </a>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>