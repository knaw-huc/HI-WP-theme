<?php get_header(); ?>

  <!-- TODO: Make this page dynamic -->

  <div class="page-heading">
    <!-- TODO: If page has parent: show button below (and add url) -->
    <a class="page-heading__button" href="#">Terug naar het overzicht</a>
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

    <aside class="main__column main__column--aside main__column--empty sidebar">

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>