<?php get_header(); ?>

  <div class="page-heading">
    <!-- TODO: If page has parent: show button below (and add url) -->
    <a class="page-heading__button" href="#">Terug naar het overzicht</a>
    <h2>Nieuws</h2>
  </div>
  <!-- end .page-heading -->

  <div class="main">

    <div class="project-overview">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php include('inc/news-card.php'); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <!-- end .project-overview -->

  </div>
  <!-- end .main -->

  <div class="main">

    <!-- TODO: Implement pagination -->

    <div class="pagination">

      <div class="pagination__column">
        <a href="#" class="pagination__button pagination__button--previous">Vorige pagina</a>
      </div>
      <!-- end .pagination__column -->

      <div class="pagination__column">
        <a href="#" class="pagination__button pagination__button--number">1</a>
        <a href="#" class="pagination__button pagination__button--number">2</a>
        <a href="#" class="pagination__button pagination__button--number">3</a>
        <a href="#" class="pagination__button pagination__button--number">4</a>
        <a href="#" class="pagination__button pagination__button--number">5</a>
      </div>
      <!-- end .pagination__column -->

      <div class="pagination__column">
        <a href="#" class="pagination__button pagination__button--next">Volgende pagina</a>
      </div>
      <!-- end .pagination__column -->

    </div>
    <!-- end .pagination -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>