<?php get_header(); ?>

  <?php if(!isset($_GET['thema']) && !isset($_GET['period']) && !isset($_GET['tag'])) { ?>

    <div class="page-intro">

      <!-- TODO: Make this element dynamic -->
      <div class="page-intro__text">

        <h2>Onderzoeksprojecten</h2>

        <p>Het Huygens ING verricht onderzoek op het gebied van de Geschiedenis, Letterkunde, Wetenschapsgeschiedenis, en Digital Humanities. We geven hier een selectie uit onze lopende projecten.</p>

      </div>
      <!-- end .page-intro__text -->

      <?php include(get_template_directory() . '/inc/featured-project-carousel.php'); ?>

    </div>
    <!-- end .page-intro -->

  <?php } ?>

  <div class="main">
    <?php include('inc/project-filter.php'); ?>
    <?php include('inc/project-overview.php'); ?>
  </div>
  <!-- end .main -->

<?php get_footer(); ?>