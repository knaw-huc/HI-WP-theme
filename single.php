<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_post_type_archive_link('post'); ?>">Terug naar het overzicht</a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <p class="meta"><?php the_time('d-m-Y'); ?></p>

          <h1><?php the_title(); ?></h1>

          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">

      <?php include('inc/sidebar/related-projects.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
      <?php include('inc/sidebar/text.php'); ?>

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

  <div class="main">

    <div class="content-overview">

      <h4 class="content-overview__heading">Gerelateerde nieuwsberichten</h4>

      <!-- TODO: Handpicked related posts, aanvullen tot 3 met recente posts -->

      <div class="project-overview">

        <a href="#" class="card card--default">

          <div class="card__visual">

            <img src="./img/content/card/visual.jpg" alt="">

          </div>
          <!-- end .card__visual -->

          <div class="card__info">

            <div class="card__info__section">
              <span>22-11-2017</span>
              <h6>Brieven van de Hollandse en Friese Stadhoudersvrouwen 1605-1725</h6>
            </div>
            <!-- end .card__info__section -->

            <div class="card__info__section">

              <div class="tag-list">
                <div class="tag-list__item">Scheepvaart</div>
                <div class="tag-list__item">Recht</div>
              </div>
              <!-- end .tag-list -->

            </div>
            <!-- end .card__info__section -->

          </div>
          <!-- end .card__info -->

        </a>
        <!-- end .card -->

        <a href="#" class="card card--default">

          <div class="card__visual">

            <img src="./img/content/card/visual.jpg" alt="">

          </div>
          <!-- end .card__visual -->

          <div class="card__info">

            <div class="card__info__section">
              <span>22-11-2017</span>
              <h6>Brieven van de Hollandse en Friese Stadhoudersvrouwen 1605-1725</h6>
            </div>
            <!-- end .card__info__section -->

            <div class="card__info__section">

              <div class="tag-list">
                <div class="tag-list__item">Scheepvaart</div>
                <div class="tag-list__item">Recht</div>
              </div>
              <!-- end .tag-list -->

            </div>
            <!-- end .card__info__section -->

          </div>
          <!-- end .card__info -->

        </a>
        <!-- end .card -->

        <a href="#" class="card card--default">

          <div class="card__visual">

            <img src="./img/content/card/visual.jpg" alt="">

          </div>
          <!-- end .card__visual -->

          <div class="card__info">

            <div class="card__info__section">
              <span>22-11-2017</span>
              <h6>Brieven van de Hollandse en Friese Stadhoudersvrouwen 1605-1725</h6>
            </div>
            <!-- end .card__info__section -->

            <div class="card__info__section">

              <div class="tag-list">
                <div class="tag-list__item">Scheepvaart</div>
                <div class="tag-list__item">Recht</div>
              </div>
              <!-- end .tag-list -->

            </div>
            <!-- end .card__info__section -->

          </div>
          <!-- end .card__info -->

        </a>
        <!-- end .card -->

      </div>
      <!-- end .project-overview -->

    </div>
    <!-- end .content-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>