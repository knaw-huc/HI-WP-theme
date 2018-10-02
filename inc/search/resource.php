<div class="main">

  <h4 class="search-results-heading"><?php _e('Resources', 'huygens'); ?></h4>

  <div class="resource-overview__list">

    <?php while( have_posts() ){ ?>

      <?php the_post(); ?>

      <?php if( $type == get_post_type() ){ ?>

        <?php include(get_template_directory() . '/inc/resource-card.php'); ?>

      <?php } ?>

    <?php } ?>

  </div>
  <!-- end .resource-overview__list -->

</div>
<!-- end .main -->