<div class="main">

  <h4 class="search-results-heading">Evenementen</h4>

  <div class="event-overview">

    <?php while( have_posts() ){ ?>

      <?php the_post(); ?>

      <?php if( $type == get_post_type() ){ ?>

        <?php include(get_template_directory() . '/inc/event-card.php'); ?>

      <?php } ?>

    <?php } ?>

  </div>
  <!-- end .event-overview -->

</div>
<!-- end .main -->