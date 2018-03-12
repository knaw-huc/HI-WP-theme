<?php get_header(); ?>

  <div class="homepage-intro">

    <div class="homepage-intro__text">
      <?php the_field('intro_text'); ?>
    </div>
    <!-- end .homepage-intro__text -->

    <div class="project-filter">

      <div class="project-filter__button-holder">
        <a class="project-filter__button project-filter__button--yellow" href="<?= get_post_type_archive_link('project'); ?>?thema=debatcultuur">Debatcultuur</a>
        <a class="project-filter__button project-filter__button--orange" href="<?= get_post_type_archive_link('project'); ?>?thema=bestuur-van-nederland">Bestuur van Nederland</a>
        <a class="project-filter__button project-filter__button--blue" href="<?= get_post_type_archive_link('project'); ?>?thema=vernieuwing-editeren">Vernieuwing editeren</a>
        <a class="project-filter__button project-filter__button--green" href="<?= get_post_type_archive_link('project'); ?>?thema=circulation-of-impact">Circulation of Impact</a>
      </div>
      <!-- end .project-filter__button-holder -->

    </div>
    <!-- end .project-filter -->

  </div>
  <!-- end .homepage-intro -->

  <div class="main">

    <div class="homepage-heading">
      <h4 class="homepage-heading__text">Uitgelicht</h4>
    </div>
    <!-- end .homepage-heading -->

    <?php include(get_template_directory() . '/inc/homepage-carousel.php'); ?>

  </div>
  <!-- end .main -->

  <div class="main">

    <div class="homepage-heading">
      <h4 class="homepage-heading__text">Resources</h4>
      <a class="homepage-heading__button" href="<?= get_post_type_archive_link('resource'); ?>">Bekijk alle resources</a>
    </div>
    <!-- end .homepage-heading -->

    <!-- TODO: Implement resources overview -->

    <div class="project-overview">

      <a href="#" class="card card--default">

        <div class="card__visual">

          <img src="./img/content/card/visual.jpg" alt="">

        </div>
        <!-- end .card__visual -->

        <div class="card__info">

          <div class="card__info__section">
            <h6>Resolutiën der Staten-Generaal 1576-1630</h6>
          </div>
          <!-- end .card__info__section -->

          <div class="card__info__section">

            <div class="tag-list">
              <div class="tag-list__item tag-list__item--type">Scheepvaart</div>
              <div class="tag-list__item">Scheepvaart</div>
              <div class="tag-list__item">Recht</div>
            </div>
            <!-- end .tag-list -->

          </div>
          <!-- end .card__info__section -->

        </div>
        <!-- end .card__info -->

        <object>
          <a href="#" class="card__button">
            <span class="card__button__text">Bekijk resource</span>
            <span class="card__button__icon"></span>
          </a>
        </object>

      </a>
      <!-- end .card -->

      <a href="#" class="card card--default">

        <div class="card__visual">

          <img src="./img/content/card/visual.jpg" alt="">

        </div>
        <!-- end .card__visual -->

        <div class="card__info">

          <div class="card__info__section">
            <h6>Resolutiën der Staten-Generaal 1576-1630</h6>
          </div>
          <!-- end .card__info__section -->

          <div class="card__info__section">

            <div class="tag-list">
              <div class="tag-list__item tag-list__item--type">Scheepvaart</div>
              <div class="tag-list__item">Scheepvaart</div>
              <div class="tag-list__item">Recht</div>
            </div>
            <!-- end .tag-list -->

          </div>
          <!-- end .card__info__section -->

        </div>
        <!-- end .card__info -->

        <object>
          <a href="#" class="card__button">
            <span class="card__button__text">Bekijk resource</span>
            <span class="card__button__icon"></span>
          </a>
        </object>

      </a>
      <!-- end .card -->

      <a href="#" class="card card--default">

        <div class="card__visual">

          <img src="./img/content/card/visual.jpg" alt="">

        </div>
        <!-- end .card__visual -->

        <div class="card__info">

          <div class="card__info__section">
            <h6>Resolutiën der Staten-Generaal 1576-1630</h6>
          </div>
          <!-- end .card__info__section -->

          <div class="card__info__section">

            <div class="tag-list">
              <div class="tag-list__item tag-list__item--type">Scheepvaart</div>
              <div class="tag-list__item">Scheepvaart</div>
              <div class="tag-list__item">Recht</div>
            </div>
            <!-- end .tag-list -->

          </div>
          <!-- end .card__info__section -->

        </div>
        <!-- end .card__info -->

        <object>
          <a href="#" class="card__button">
            <span class="card__button__text">Bekijk resource</span>
            <span class="card__button__icon"></span>
          </a>
        </object>

      </a>
      <!-- end .card -->

    </div>
    <!-- end .project-overview -->

  </div>
  <!-- end .main -->

  <!-- TODO: Implement newsletter form -->
  <div class="newsletter">

    <h4 class="newsletter__heading">Schrijf je in voor de nieuwsbrief</h4>

    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
      <form action="#" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
        <div id="mc_embed_signup_scroll"><input class="required email" id="mce-EMAIL" name="EMAIL" placeholder="Jouw emailadres" type="email" value="" />
          <div style="position: absolute; left: -5000px;"><input name="" tabindex="-1" type="text" value="" /></div>
          <input class="button" id="mc-embedded-subscribe" name="subscribe" type="submit" value="Abonneren" /></div>
        </form>
      </div>
      <!--End mc_embed_signup-->

  </div>
  <!-- end .newsletter -->

<?php get_footer(); ?>