<?php get_header(); ?>

  <!-- TODO: Make this page dynamic -->
  <?php if(!isset($_GET['rtype']) && !isset($_GET['rperiod']) && !isset($_GET['rtag'])) { ?>

    <div class="page-intro">

      <!-- TODO: Make text dynamic -->
      <div class="page-intro__text">

        <h2>Resources</h2>

        <p>Het Huygens ING streeft ernaar bronnen en data op een zorgvuldige en wetenschappelijk verantwoorde wijze online te publiceren. Innovatieve tools proberen we zo toegankelijk mogelijk te maken. We hebben een enorme hoeveelheid aan kennis in huis, die we graag willen delen met academische collega’s en het bredere publiek.</p>

      </div>
      <!-- end .page-intro__text -->

      <?php include(get_template_directory() . '/inc/featured-resource-carousel.php'); ?>

    </div>
     <!-- end .page-intro -->

  <?php } ?>

  <div class="main">

    <div class="resource-overview">
      <?php include(get_template_directory() . '/inc/resource-filter.php'); ?>
      <?php include(get_template_directory() . '/inc/resource-overview.php'); ?>
    </div>
    <!-- end .resource-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>