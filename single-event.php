<?php get_header(); ?>

  <!-- TODO: 1. Make this page dynamic -->

  <div class="page-heading">
    <a class="page-heading__button" href="#">Terug naar het overzicht</a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body main__column--event text-holder">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <p class="date">30 november — 1 december 2017</p>

          <h1><?php the_title(); ?></h1>

          <div class="tag-list">
            <div class="tag-list__item">Politiek</div>
            <div class="tag-list__item">International</div>
          </div>
          <!-- end .tag-list -->

          <hr>

          <div class="event-meta">
            <span class="event-meta__name">Locatie</span>
            <span class="event-meta__value">
              Koninklijke bibliotheek Den Haag<br />
              Prins Willem-Alexanderhof 5, Den Haag
            </span>
          </div>
          <!-- end .event-meta -->

          <div class="event-meta">
            <span class="event-meta__name">Aanvang/einde</span>
            <span class="event-meta__value">10:00 — 17:00</span>
          </div>
          <!-- end .event-meta -->

          <hr>

          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">
      <?php include('inc/sidebar/rsvp.php'); ?>
      <?php include('inc/sidebar/contactperson.php'); ?>
      <?php include('inc/sidebar/related-projects.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>