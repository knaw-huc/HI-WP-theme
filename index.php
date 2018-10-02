<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie')); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
    <h2><?php _e('Nieuws', 'huygens'); ?></h2>
  </div>
  <!-- end .page-heading -->

  <div class="main">

    <div class="project-overview">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php include('inc/news-card.php'); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <!-- end .project-overview -->

  </div>
  <!-- end .main -->

  <div class="main">

    <div class="pagination">

      <div class="pagination__column">
        <?php previous_posts_link(__('Vorige pagina', 'huygens')); ?>
      </div>
      <!-- end .pagination__column -->

      <div class="pagination__column">

        <?php
        $args = array(
          'end_size'  => 0,
          'prev_next' => false,
        );

        echo paginate_links($args);
        ?>

      </div>
      <!-- end .pagination__column -->

      <div class="pagination__column">
        <?php next_posts_link(__('Volgende pagina', 'huygens'), ''); ?>
      </div>
      <!-- end .pagination__column -->

    </div>
    <!-- end .pagination -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>