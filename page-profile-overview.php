<?php
/**
* Template name: Medewerkers
 */
?>

<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie')); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column profile-overview">

      <h2 class="profile-overview__heading"><?php the_title(); ?></h2>

      <?php if( have_rows('profile_category') ): ?>

        <?php while ( have_rows('profile_category') ) : the_row(); ?>

          <div class="profile-overview__category">

            <h4 class="profile-overview__category__heading"><?php the_sub_field('name'); ?></h4>

            <div class="profile-overview__category__grid">

              <?php $posts = get_sub_field('profiles'); ?>
              <?php if( $posts ): ?>

                <?php foreach( $posts as $post): ?>

                  <?php setup_postdata($post); ?>

                  <?php include('inc/profile-button.php'); ?>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

              <?php endif; ?>

            </div>
            <!-- end .profile-overview__category__grid -->

          </div>
          <!-- end .profile-overview__category -->

        <?php endwhile; ?>

      <?php endif; ?>

    </main>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>