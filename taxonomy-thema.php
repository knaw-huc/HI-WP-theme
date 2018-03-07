<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_post_type_archive_link('project'); ?>">Terug naar het overzicht</a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder">

      <?php $term = get_queried_object(); ?>

      <h1><?php single_term_title(); ?></h1>

      <?php the_field('thema_long_description', $term); ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside main__column--empty sidebar">

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>