<div class="main">

  <h4 class="search-results-heading">Medewerkers</h4>

  <div class="profile-overview__category">

    <div class="profile-overview__category__grid">

      <?php while( have_posts() ){ ?>

        <?php the_post(); ?>

        <?php if( $type == get_post_type() ){ ?>

          <?php include(get_template_directory() . '/inc/profile-button.php'); ?>

        <?php } ?>

      <?php } ?>

    </div>
    <!-- end .profile-overview__category__grid -->

  </div>
  <!-- end .profile-overview__category -->

</div>
<!-- end .main -->