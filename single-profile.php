<?php
ob_start();

$profileType = get_field('profile_type');

if(empty($profileType) && isset(get_field('pure_profile')[0])) {
  $profileType = get_field('profile_type', get_field('pure_profile')[0]);
}

if($profileType == 'external') {
  header('Location: ' . get_bloginfo('url'));
}
?>
<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie/medewerkers')); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--profile" role="main">

      <div class="profile-section profile-section--intro">

        <?php include('inc/profile-button.php'); ?>

      </div>
      <!-- end .profile-section -->

      <?php
      $profileDepartmentHeading = get_field('profile_department_heading');
      $profileDepartment = get_field('profile_department');
      $profileFocus = get_field('profile_focus');
      $profileEmail = get_field('profile_email');
      $profilePhone = get_field('profile_phone');
      $profileFacebook = get_field('profile_facebook');
      $profileTwitter = get_field('profile_twitter');
      $profileLinkedin = get_field('profile_linkedin');
      $profileInstagram = get_field('profile_instagram');
      $profileWebsite = get_field('profile_website');
      $profileText = get_field_without_ptags_on_images('profile_text');

      if(empty($profileDepartmentHeading) && isset(get_field('pure_profile')[0])) {
        $profileDepartmentHeading = get_field('profile_department_heading', get_field('pure_profile')[0]);
      }
      if(empty($profileDepartment) && isset(get_field('pure_profile')[0])) {
        $profileDepartment = get_field('profile_department', get_field('pure_profile')[0]);
      }
      if(empty($profileFocus) && isset(get_field('pure_profile')[0])) {
        $profileFocus = get_field('profile_focus', get_field('pure_profile')[0]);
      }
      if(empty($profileEmail) && isset(get_field('pure_profile')[0])) {
        $profileEmail = get_field('profile_email', get_field('pure_profile')[0]);
      }
      if(empty($profilePhone) && isset(get_field('pure_profile')[0])) {
        $profilePhone = get_field('profile_phone', get_field('pure_profile')[0]);
      }
      if(empty($profileFacebook) && isset(get_field('pure_profile')[0])) {
        $profileFacebook = get_field('profile_facebook', get_field('pure_profile')[0]);
      }
      if(empty($profileTwitter) && isset(get_field('pure_profile')[0])) {
        $profileTwitter = get_field('profile_twitter', get_field('pure_profile')[0]);
      }
      if(empty($profileLinkedin) && isset(get_field('pure_profile')[0])) {
        $profileLinkedin = get_field('profile_linkedin', get_field('pure_profile')[0]);
      }
      if(empty($profileInstagram) && isset(get_field('pure_profile')[0])) {
        $profileInstagram = get_field('profile_instagram', get_field('pure_profile')[0]);
      }
      if(empty($profileWebsite) && isset(get_field('pure_profile')[0])) {
        $profileWebsite = get_field('profile_website', get_field('pure_profile')[0]);
      }
      if(empty($profileText) && isset(get_field('pure_profile')[0])) {
        $profileText = get_field_without_ptags_on_images('profile_text', get_field('pure_profile')[0]);
      }
      ?>

      <div class="profile-section profile-section--details">

        <?php if(!empty($profileDepartmentHeading) && !empty($profileDepartment)) { ?>

          <?php
          if($profileDepartmentHeading == 'Onderzoeksgroep') {
            $profileDepartmentHeading = __('Onderzoeksgroep', 'huygens');
          } elseif($profileDepartmentHeading == 'Afdeling') {
            $profileDepartmentHeading = __('Afdeling', 'huygens');
          }
          ?>

          <div class="profile-meta">
            <span class="profile-meta__name"><?= $profileDepartmentHeading; ?></span>
            <span class="profile-meta__value"><?= $profileDepartment; ?></span>
          </div>
          <!-- end .profile-meta -->

        <?php } ?>

        <?php if(!empty($profileFocus)) { ?>

          <div class="profile-meta">
            <span class="profile-meta__name"><?php _e('Specialisatie', 'huygens'); ?></span>
            <span class="profile-meta__value"><?= $profileFocus; ?></span>
          </div>
          <!-- end .profile-meta -->

        <?php } ?>

        <?php if(!empty($profileEmail) || !empty($profilePhone)) { ?>

          <div class="profile-meta">
            <span class="profile-meta__name"><?php _e('Contact', 'huygens'); ?></span>
            <span class="profile-meta__value">
              <?php if(!empty($profileEmail)) { ?>
                <a href="mailto:<?= $profileEmail; ?>"><?= $profileEmail; ?></a><br />
              <?php } ?>
              <?php if(!empty($profilePhone)) { ?>
                <?= $profilePhone; ?>
              <?php } ?>
            </span>
          </div>
          <!-- end .profile-meta -->

        <?php } ?>

        <?php if(!empty($profileFacebook) || !empty($profileTwitter) || !empty($profileLinkedin) || !empty($profileInstagram) || !empty($profileWebsite)) { ?>

          <ul class="profile-social-media">

            <?php if(!empty($profileFacebook)) { ?>

              <li class="profile-social-media__item">

                <a href="<?= $profileFacebook; ?>" target="_blank" class="profile-social-media__item__button">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(!empty($profileTwitter)) { ?>

              <li class="profile-social-media__item">

                <a href="<?= $profileTwitter; ?>" target="_blank" class="profile-social-media__item__button">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(!empty($profileLinkedin)) { ?>

              <li class="profile-social-media__item">

                <a href="<?= $profileLinkedin; ?>" target="_blank" class="profile-social-media__item__button">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(!empty($profileInstagram)) { ?>

              <li class="profile-social-media__item">

                <a href="<?= $profileInstagram; ?>" target="_blank" class="profile-social-media__item__button profile-social-media__item__button--instagram">
                  
                </a>
                <!-- end .profile-social-media__item__button -->

              </li>
              <!-- end .profile-social-media__item -->

            <?php } ?>

            <?php if(!empty($profileWebsite)) { ?>

              <li class="profile-social-media__item">

                <a href="<?= $profileWebsite; ?>" target="_blank" class="profile-social-media__item__button profile-social-media__item__button--website">
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

      <?php
      $profilePublications1 = get_field('profile_publications_1');

      if(empty($profilePublications1) && isset(get_field('pure_profile')[0])) {
        $profilePublications1 = get_field('profile_publications_1', get_field('pure_profile')[0]);
      }
      ?>

      <?php if(!empty($profileText) || is_array($profilePublications1)) { ?>

        <div class="profile-section text-holder">

          <?= $profileText; ?>

          <?php if ( is_array($profilePublications1) ) : ?>

            <h5><?php _e('Belangrijkste publicaties', 'huygens'); ?></h5>

            <?php $posts = $profilePublications1; ?>

            <?php
            if(empty($profilePublications1)) {

              $args = array(
                'post_type' => 'publication_pure',
                'posts_per_page' => '-1',
                'meta_key' => 'profile_uuid',
                'meta_value' => get_field('uuid', get_field('pure_profile')[0]->ID),
                'meta_compare' => 'LIKE'
              );

              $posts = get_posts($args);

            }
            ?>

            <?php if($posts): ?>

              <ul>

                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

                  <?php setup_postdata($post); ?>

                  <?php
                  $publicationTitle = get_the_title();
                  $publicationURL = get_field('publication_url');

                  if(empty($publicationURL) && isset(get_field('pure_publication')[0])) {
                    $publicationURL = get_field('publication_url', get_field('pure_publication')[0]);
                  }
                  ?>

                  <li>
                    <a href="<?= $publicationURL; ?>" target="_blank"><?= $publicationTitle; ?></a>
                  </li>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

              </ul>

            <?php endif; ?>

          <?php endif; ?>

        </div>
        <!-- end .profile-section -->

      <?php } ?>

    </main>
    <!-- end .main__column -->

    <main class="main__column main__column--profile">

      <?php
      $projects = get_posts(array(
        'post_type' => 'project',
        'posts_per_page' => 6,
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

          <h4 class="profile-section__heading"><?php _e('Onderzoeksprojecten', 'huygens'); ?></h4>

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

      <?php if ( get_field('publicaties_en_activiteiten') ) : ?>

        <div class="profile-section">

          <h4 class="profile-section__heading"><?php _e('Publicaties', 'huygens'); ?></h4>

          <div class="publication-overview">

            <?php echo str_replace('<div><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script><script type="text/javascript">$(function(){$("#activiteiten-tabs").tabs();});</script></div>', '', get_field('publicaties_en_activiteiten')); ?>

          </div>
          <!-- end .publication-overview -->

        </div>
        <!-- end .profile-section -->

      <?php endif; ?>

    </main>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>