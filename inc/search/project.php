<div class="main">

  <h4 class="search-results-heading">Onderzoeksprojecten</h4>

  <div class="project-overview">

    <?php while( have_posts() ){ ?>

      <?php the_post(); ?>

      <?php if( $type == get_post_type() ){ ?>

        <?php include(get_template_directory() . '/inc/project-card.php'); ?>

      <?php } ?>

    <?php } ?>

  </div>
  <!-- end .project-overview -->

</div>
<!-- end .main -->