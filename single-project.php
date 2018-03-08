<?php get_header(); ?>

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
      <?php include('inc/sidebar/themas.php'); ?>
      <?php include('inc/sidebar/tags.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
      <?php include('inc/sidebar/links.php'); ?>
      <?php include('inc/sidebar/publications.php'); ?>
      <?php include('inc/sidebar/related-posts.php'); ?>
      <?php include('inc/sidebar/related-events.php'); ?>
    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>