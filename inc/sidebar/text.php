<?php if(get_field('sidebar_text_heading') || get_field('sidebar_text_body')): ?>

  <div class="sidebar__item">

    <?php if(get_field('sidebar_text_heading')): ?>
      <h4 class="sidebar__item__heading"><?php the_field('sidebar_text_heading'); ?></h4>
    <?php endif; ?>

    <?php if(get_field('sidebar_text_body')): ?>

      <div class="sidebar_text_body">

        <div class="sidebar__item__text-holder">

          <?php the_field('sidebar_text_body'); ?>

        </div>
        <!-- end .sidebar__item__text-holder -->

      </div>
      <!-- end .sidebar__item__body -->

    <?php endif; ?>

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>