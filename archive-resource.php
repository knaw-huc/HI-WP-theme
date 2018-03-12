<?php get_header(); ?>

  <?php if(!isset($_GET['rtype']) && !isset($_GET['rperiod']) && !isset($_GET['rtag'])) { ?>

    <div class="page-intro">

      <div class="page-intro__text">

        <h2>Resources</h2>

        <?php the_field('resources_text', 'options'); ?>

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