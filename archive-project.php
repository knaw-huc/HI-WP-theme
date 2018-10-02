<?php get_header(); ?>

  <?php if(!isset($_GET['thema']) && !isset($_GET['period']) && !isset($_GET['tag'])) { ?>

    <div class="page-intro">

      <div class="page-intro__text">

        <h2><?php _e('Onderzoeksprojecten', 'huygens'); ?></h2>

        <?php the_field('projects_text', 'options'); ?>

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