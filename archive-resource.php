<?php get_header(); ?>

  <!-- TODO: Make this page dynamic -->

  <div class="page-intro">

    <!-- TODO: Make text dynamic -->
    <div class="page-intro__text">

      <h2>Resources</h2>

      <p>Het Huygens ING streeft ernaar bronnen en data op een zorgvuldige en wetenschappelijk verantwoorde wijze online te publiceren. Innovatieve tools proberen we zo toegankelijk mogelijk te maken. We hebben een enorme hoeveelheid aan kennis in huis, die we graag willen delen met academische collega’s en het bredere publiek.</p>

    </div>
    <!-- end .page-intro__text -->

    <?php $posts = get_field('featured_resources', 'options'); ?>

    <?php if($posts): ?>

      <div class="page-intro__carousel owl-carousel">

        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

          <?php setup_postdata($post); ?>

          <?php include(get_template_directory() . '/inc/homepage-resource-card.php'); ?>

        <?php endforeach; ?>

        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

      </div>
      <!-- end .page-intro__carousel -->

    <?php endif; ?>

  </div>
   <!-- end .page-intro -->

   <!-- TODO: Reset query for overview below -->
   <!-- TODO: Unlimited posts per page -->

  <div class="main">

    <div class="resource-overview">

      <div class="resource-overview__filter-holder">

        <div class="resource-overview__filter">

          <h4 class="resource-overview__filter__heading">Type</h4>

          <div class="resource-overview__filter__body">

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Bronnenpublicatie</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Vakliteratuur</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox" checked>
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Platform</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox" checked>
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Teksteditie</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Tool</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <a href="" class="resource-overview__filter__body__button">Wis selectie</a>

          </div>
          <!-- end .resource-overview__filter__body -->

        </div>
        <!-- end .resource-overview__filter -->

        <div class="resource-overview__filter">

          <h4 class="resource-overview__filter__heading">Periode</h4>

          <div class="resource-overview__filter__body">

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">20e eeuw</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">19e eeuw</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">18e eeuw</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">17e eeuw</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">16e eeuw</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Middeleeuwen</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Oudheid</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

          </div>
          <!-- end .resource-overview__filter__body -->

        </div>
        <!-- end .resource-overview__filter -->

        <div class="resource-overview__filter">

          <h4 class="resource-overview__filter__heading">Onderwerp</h4>

          <div class="resource-overview__filter__body">

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Cultuur en kunst</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Economie en financiën</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Kerk en religie</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Letterkunde</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Maatschappij</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Oorlog en krijgsmacht</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Overzeese gebieden</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Politiek en bestuur</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Scheepvaart</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

            <label class="resource-overview__filter__body__item control checkbox">
              <input class="resource-overview__filter__body__item__button" type="checkbox">
              <span class="control-indicator"></span>
              <span class="resource-overview__filter__body__item__text">Wetenschap en techniek</span>
            </label>
            <!-- end .resource-overview__filter__body__item -->

          </div>
          <!-- end .resource-overview__filter__body -->

        </div>
        <!-- end .resource-overview__filter -->

      </div>
      <!-- end .resource-overview__filter -->

      <div class="resource-overview__list">

        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php include('inc/resource-card.php'); ?>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <!-- end .resource-overview__list -->

    </div>
    <!-- end .resource-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>