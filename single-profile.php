<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie/medewerkers')); ?>">Terug naar het overzicht</a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--profile">

      <div class="profile-section profile-section--intro">

        <?php include('inc/profile-button.php'); ?>

      </div>
      <!-- end .profile-section -->

      <div class="profile-section profile-section--details">

        <?php if(get_field('profile_department')) { ?>

          <div class="profile-meta">
            <span class="profile-meta__name">Afdeling</span>
            <span class="profile-meta__value">
              <?php the_field('profile_department'); ?>
            </span>
          </div>
          <!-- end .profile-meta -->

        <?php } ?>

        <?php if(get_field('profile_focus')) { ?>

          <div class="profile-meta">
            <span class="profile-meta__name">Specialisatie</span>
            <span class="profile-meta__value"><?php the_field('profile_focus'); ?></span>
          </div>
          <!-- end .profile-meta -->

        <?php } ?>

        <?php if(get_field('profile_email') || get_field('profile_phone')) { ?>

          <div class="profile-meta">
            <span class="profile-meta__name">Contact</span>
            <span class="profile-meta__value">
              <?php if(get_field('profile_email')) { ?>
                <a href="mailto:<?php the_field('profile_email'); ?>"><?php the_field('profile_email'); ?></a><br />
              <?php } ?>
              <?php if(get_field('profile_phone')) { ?>
                <?php the_field('profile_phone'); ?>
              <?php } ?>
            </span>
          </div>
          <!-- end .profile-meta -->

        <?php } ?>

        <?php if(get_field('profile_facebook') || get_field('profile_twitter')) { ?>

          <ul class="profile-social-media">

            <?php if(get_field('profile_facebook')) { ?>

              <li class="profile-social-media__item">

                <a href="<?php the_field('profile_facebook'); ?>" target="_blank" class="profile-social-media__item__button">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(get_field('profile_twitter')) { ?>

              <li class="profile-social-media__item">

                <a href="<?php the_field('profile_twitter'); ?>" target="_blank" class="profile-social-media__item__button">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>




            <?php if(get_field('profile_linkedin')) { ?>

              <li class="profile-social-media__item">

                <a href="<?php the_field('profile_linkedin'); ?>" target="_blank" class="profile-social-media__item__button">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(get_field('profile_instagram')) { ?>

              <li class="profile-social-media__item">

                <a href="<?php the_field('profile_instagram'); ?>" target="_blank" class="profile-social-media__item__button profile-social-media__item__button--instagram">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(get_field('profile_website')) { ?>

              <li class="profile-social-media__item">

                <a href="<?php the_field('profile_website'); ?>" target="_blank" class="profile-social-media__item__button profile-social-media__item__button--website">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>






          </ul>
          <!-- end .profile-social-media -->

        <?php } ?>

      </div>
      <!-- end .profile-section -->

      <?php if(get_field('profile_text')) { ?>

        <div class="profile-section text-holder">
          <?php echo get_field_without_ptags_on_images('profile_text'); ?>
        </div>
        <!-- end .profile-section -->

      <?php } ?>

    </main>
    <!-- end .main__column -->

    <main class="main__column main__column--profile">

      <?php
      $projects = get_posts(array(
        'post_type' => 'project',
        'meta_query' => array(
          array(
            'key' => 'sidebar_related_profiles', // name of custom field
            'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
            'compare' => 'LIKE'
          )
        )
      ));
      ?>

      <?php if( $projects ): ?>

        <div class="profile-section">

          <h4 class="profile-section__heading">Onderzoeksprojecten</h4>

          <div class="profile-section__project-overview">

            <?php foreach( $projects as $project ): ?>

              <?php $photo = get_field('photo', $project->ID); ?>

              <a href="<?php echo get_permalink( $project->ID ); ?>" class="card card--default card--thumbnail card--small">

                <div class="card__visual image-filter">

                  <?php echo wp_get_attachment_image(get_field('page_image', $project->ID)['id'], 'card--regular', 0, array('alt' => get_the_title( $project->ID ))); ?>

                  <div class="card__visual__markers">
                    <div class="card__visual__markers__item card__visual__markers__item--blue"></div>
                  </div>
                  <!-- end .card__visual__markers -->

                </div>
                <!-- end .card__visual -->

                <div class="card__info">

                  <div class="card__info__section">
                    <h6><?php echo get_the_title( $project->ID ); ?></h6>
                  </div>
                  <!-- end .card__info__section -->

                </div>
                <!-- end .card__info -->

              </a>
              <!-- end .card -->

            <?php endforeach; ?>

          </div>
          <!-- end .profile-section__project-overview -->

        </div>
        <!-- end .profile-section -->

      <?php endif; ?>

      <div class="profile-section">

        <h4 class="profile-section__heading">Publicaties</h4>

        <div class="publication-overview">

          <?php $posts = get_field('profile_publications_1'); ?>

          <?php if($posts): ?>

            <?php $i = 0; ?>

            <div class="publication-overview__section">

              <h5 class="publication-overview__section__heading">Belangrijkste publicaties</h5>

              <?php include(get_template_directory() . '/inc/publication-overview-section-list.php'); ?>

            </div>
            <!-- end .publication-overview__section -->

          <?php endif; ?>

          <?php $posts = get_field('profile_publications_2'); ?>

          <?php if($posts): ?>

            <?php $i = 0; ?>

            <div class="publication-overview__section">

              <h5 class="publication-overview__section__heading">Overige publicaties</h5>

              <?php include(get_template_directory() . '/inc/publication-overview-section-list.php'); ?>

            </div>
            <!-- end .publication-overview__section -->

          <?php endif; ?>

          <?php $posts = get_field('profile_publications_3'); ?>

          <?php if($posts): ?>

            <?php $i = 0; ?>

            <div class="publication-overview__section">

              <h5 class="publication-overview__section__heading">Populair-wetenschappelijke publicaties</h5>

              <?php include(get_template_directory() . '/inc/publication-overview-section-list.php'); ?>

            </div>
            <!-- end .publication-overview__section -->

          <?php endif; ?>

        </div>
        <!-- end .publication-overview -->

      </div>
      <!-- end .profile-section -->

    </main>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>