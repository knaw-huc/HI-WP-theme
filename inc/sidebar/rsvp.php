<?php if( get_field('sidebar_rsvp_text') || get_field('sidebar_rsvp_button_text') || get_field('sidebar_twitter')): ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Aanmelden</h4>

    <div class="sidebar__item__body">

      <?php if(get_field('sidebar_rsvp_text')): ?>

        <div class="sidebar__item__text-holder">

          <p>
            <?php the_field('sidebar_rsvp_text'); ?>
          </p>

        </div>
        <!-- end .sidebar__item__text-holder -->

      <?php endif; ?>

      <?php if(get_field('sidebar_rsvp_button_text') && get_field('sidebar_rsvp_button_url')): ?>

        <a href="<?php the_field('sidebar_rsvp_button_url'); ?>" target="_blank" class="sidebar__item__button sidebar__item__button--default sidebar__item__button--small">
          <?php the_field('sidebar_rsvp_button_text'); ?>
        </a>
        <!-- end .sidebar__item__button -->

      <?php endif; ?>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>