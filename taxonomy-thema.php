<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_post_type_archive_link('project'); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder" role="main">

      <?php $term = get_queried_object(); ?>

      <h1><?php single_term_title(); ?></h1>

      <?php the_field('thema_long_description', $term); ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">
      <?php include('inc/sidebar/related-posts.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

  <div class="main">

    <?php
    $args = array(
      'post_type' => 'project',
      'posts_per_page' => '-1',
    );

    // Button: Thema
    $args['tax_query'][] = array(
      'taxonomy' => 'thema',
      'field' => 'name',
      'terms' => single_term_title('', false)
    );

    query_posts($args);
    ?>

    <div class="project-overview">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php include(get_template_directory() . '/inc/project-card.php'); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <!-- end .project-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>