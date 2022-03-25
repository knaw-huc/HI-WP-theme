<?php if(get_field('sidebar_contactperson_name')) { ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading"><?php _e('Contactpersoon', 'huygens'); ?></h4>

    <div class="sidebar__item__body">

      <div class="sidebar__item__text-holder sidebar__item__text-holder--person">

        <p><strong><?php the_field('sidebar_contactperson_name'); ?></strong></p>

        <p>

          <?php if(get_field('sidebar_contactperson_email')) { ?>
            <a href="mailto:<?php the_field('sidebar_contactperson_email'); ?>"><?php the_field('sidebar_contactperson_email'); ?></a><br />
          <?php } ?>

          <?php if(get_field('sidebar_contactperson_phone')) { ?>
            <?php the_field('sidebar_contactperson_phone'); ?>
          <?php } ?>

        </p>

      </div>
      <!-- end .sidebar__item__text-holder -->

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php } ?>