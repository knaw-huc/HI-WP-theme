<?php if( have_rows('sidebar_links') || get_field('sidebar_facebook') || get_field('sidebar_twitter')): ?>

  <div class="sidebar__item">

    <h4 class="sidebar__item__heading">Links</h4>

    <div class="sidebar__item__body">

      <?php if( have_rows('sidebar_links') ): ?>

        <?php while ( have_rows('sidebar_links') ) : the_row(); ?>

          <a href="<?php the_sub_field('url'); ?>" target="_blank" class="sidebar__item__text-link">
            <?php the_sub_field('title'); ?>
          </a>
          <!-- end .sidebar__item__text-link -->

        <?php endwhile; ?>

      <?php endif; ?>

      <?php if(get_field('sidebar_facebook') || get_field('sidebar_twitter')) { ?>

        <ul class="sidebar__item__social-media">

          <?php if(get_field('sidebar_facebook')) { ?>

            <li class="sidebar__item__social-media__item">

              <a href="<?php the_field('sidebar_facebook'); ?>" target="_blank" class="sidebar__item__social-media__item__button">
                
              </a>
              <!-- end .sidebar__item__social-media__item__button -->

            </li>
            <!-- end .sidebar__item__social-media__item -->

          <?php } ?>

          <?php if(get_field('sidebar_twitter')) { ?>

            <li class="sidebar__item__social-media__item">

              <a href="<?php the_field('sidebar_twitter'); ?>" target="_blank" class="sidebar__item__social-media__item__button">
                
              </a>
              <!-- end .sidebar__item__social-media__item__button -->

            </li>
            <!-- end .sidebar__item__social-media__item -->

          <?php } ?>

        </ul>
        <!-- end .sidebar__item__social-media -->

      <?php } ?>

    </div>
    <!-- end .sidebar__item__body -->

  </div>
  <!-- end .sidebar__item -->

<?php endif; ?>