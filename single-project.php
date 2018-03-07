<?php get_header(); ?>

  <!-- NOTE: Kan deze single file gecombineerd worden met andere singles? -->

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_post_type_archive_link('project'); ?>">Terug naar het overzicht</a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">

      <div class="sidebar__item">

        <h4 class="sidebar__item__heading">Gerelateerde thema’s</h4>

        <div class="sidebar__item__body">

          <?php
          $themas = wp_get_post_terms($post->ID, 'thema');

          foreach($themas as $thema) {

            if($thema->slug == 'bestuur-van-nederland') {
              $themaColor = 'orange';
            } else if($thema->slug == 'circulation-of-impact') {
              $themaColor = 'green';
            } else if($thema->slug == 'debatcultuur') {
              $themaColor = 'yellow';
            } else if($thema->slug == 'vernieuwing-editeren') {
              $themaColor = 'blue';
            }

            echo '<a href="' . get_term_link($thema) .'" class="sidebar__item__button sidebar__item__button--' . $themaColor . '">' . $thema->name . '</a>';

          }
          ?>

        </div>
        <!-- end .sidebar__item__body -->

      </div>
      <!-- end .sidebar__item -->

      <div class="sidebar__item">

        <h4 class="sidebar__item__heading">Tags</h4>

        <div class="sidebar__item__body">

          <?php include('inc/tag-list.php'); ?>

        </div>
        <!-- end .sidebar__item__body -->

      </div>
      <!-- end .sidebar__item -->

      <?php $posts = get_field('related_profiles'); ?>

      <?php if($posts): ?>

        <div class="sidebar__item">

          <h4 class="sidebar__item__heading">Gerelateerde medewerkers</h4>

          <div class="sidebar__item__body">

            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

              <?php setup_postdata($post); ?>

              <?php include('inc/profile-button.php'); ?>

            <?php endforeach; ?>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

          </div>
          <!-- end .sidebar__item__body -->

        </div>
        <!-- end .sidebar__item -->

      <?php endif; ?>

      <?php if( have_rows('project_links') || get_field('project_facebook') || get_field('project_twitter')): ?>

        <div class="sidebar__item">

          <h4 class="sidebar__item__heading">Links</h4>

          <div class="sidebar__item__body">

            <?php if( have_rows('project_links') ): ?>

              <?php while ( have_rows('project_links') ) : the_row(); ?>

                <a href="<?php the_sub_field('url'); ?>" target="_blank" class="sidebar__item__text-link">
                  <?php the_sub_field('title'); ?>
                </a>
                <!-- end .sidebar__item__text-link -->

              <?php endwhile; ?>

            <?php endif; ?>

            <?php if(get_field('project_facebook') || get_field('project_twitter')) { ?>

              <ul class="sidebar__item__social-media">

                <?php if(get_field('project_facebook')) { ?>

                  <li class="sidebar__item__social-media__item">

                    <a href="<?php the_field('project_facebook'); ?>" target="_blank" class="sidebar__item__social-media__item__button">
                      
                    </a>
                    <!-- end .sidebar__item__social-media__item__button -->

                  </li>
                  <!-- end .sidebar__item__social-media__item -->

                <?php } ?>

                <?php if(get_field('project_twitter')) { ?>

                  <li class="sidebar__item__social-media__item">

                    <a href="<?php the_field('project_twitter'); ?>" target="_blank" class="sidebar__item__social-media__item__button">
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

      <?php if( have_rows('profile_publications_2') ): ?>

        <div class="sidebar__item">

          <h4 class="sidebar__item__heading">Gerelateerde publicaties</h4>

          <div class="sidebar__item__body">

            <?php while ( have_rows('profile_publications_2') ) : the_row(); ?>

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

      <?php $posts = get_field('related_posts'); ?>

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

      <?php $posts = get_field('related_events'); ?>

      <?php if($posts): ?>

        <div class="sidebar__item">

          <h4 class="sidebar__item__heading">Gerelateerde evenementen</h4>

          <div class="sidebar__item__body">

            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

              <?php setup_postdata($post); ?>

              <a href="<?php the_permalink(); ?>" class="sidebar__item__text-link">
                <!-- TODO: Make date dynamic -->
                <span>12 december 2017</span><br />
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

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>