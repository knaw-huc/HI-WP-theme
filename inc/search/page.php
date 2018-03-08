<div class="main">

  <h4 class="search-results-heading">Overigen</h4>

  <div class="search-results-list">

    <?php while( have_posts() ){ ?>

      <?php the_post(); ?>

      <?php if( $type == get_post_type() ){ ?>

        <a href="<?php the_permalink(); ?>" class="search-results-list__item">
          <strong><?php the_title(); ?></strong><br />
          <?php the_excerpt(); ?>
        </a>
        <!-- end .search-results-list__item -->

      <?php } ?>

    <?php } ?>

  </div>
  <!-- end .search-results-list -->

</div>
<!-- end .main -->