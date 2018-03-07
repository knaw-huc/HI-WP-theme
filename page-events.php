<?php
/**
* Template name: Evenementen
 */
?>

<?php get_header(); ?>

  <!-- TODO: Make this page dynamic -->

  <div class="page-heading">
    <!-- TODO: If page has parent: show button below (and add url) -->
    <a class="page-heading__button" href="#">Terug naar het overzicht</a>
    <h2><?php the_title(); ?></h2>
  </div>
  <!-- end .page-heading -->

  <div class="main">

    <div class="event-overview">

      <a href="#" class="card card--bar card--event">

        <div class="card__visual">
          <img src="./img/content/card/visual.jpg" alt="">
        </div>
        <!-- end .card__visual -->

        <div class="card__info">

          <div class="card__info__section">
            <p>30 november — 1 december 2017</p>
            <h6>Acta van het consistorie van de Nederlandse gemeente te Londen 1569-1585</h6>
          </div>
          <!-- end .card__info__section -->

          <div class="card__info__section">

            <div class="tag-list">
              <div class="tag-list__item">Politiek</div>
              <div class="tag-list__item">Internationaal</div>
            </div>
            <!-- end .tag-list -->

          </div>
          <!-- end .card__info__section -->

        </div>
        <!-- end .card__info -->

      </a>
      <!-- end .card -->

      <a href="#" class="card card--bar card--event">

        <div class="card__visual">
          <img src="./img/content/card/visual.jpg" alt="">
        </div>
        <!-- end .card__visual -->

        <div class="card__info">

          <div class="card__info__section">
            <p>30 november</p>
            <h6>Acta van het consistorie van de Nederlandse gemeente te Londen 1569-1585</h6>
          </div>
          <!-- end .card__info__section -->

          <div class="card__info__section">

            <div class="tag-list">
              <div class="tag-list__item">Politiek</div>
              <div class="tag-list__item">Internationaal</div>
            </div>
            <!-- end .tag-list -->

          </div>
          <!-- end .card__info__section -->

        </div>
        <!-- end .card__info -->

      </a>
      <!-- end .card -->

      <a href="#" class="card card--bar card--event">

        <div class="card__visual">
          <img src="./img/content/card/visual.jpg" alt="">
        </div>
        <!-- end .card__visual -->

        <div class="card__info">

          <div class="card__info__section">
            <p>30 november</p>
            <h6>Acta van het consistorie van de Nederlandse gemeente te Londen 1569-1585</h6>
          </div>
          <!-- end .card__info__section -->

          <div class="card__info__section">

            <div class="tag-list">
              <div class="tag-list__item">Politiek</div>
              <div class="tag-list__item">Internationaal</div>
            </div>
            <!-- end .tag-list -->

          </div>
          <!-- end .card__info__section -->

        </div>
        <!-- end .card__info -->

      </a>
      <!-- end .card -->

    </div>
    <!-- end .event-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>