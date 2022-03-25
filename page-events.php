<?php
/**
* Template name: Evenementen
 */
?>

<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie')); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
    <h2><?php the_title(); ?></h2>
  </div>
  <!-- end .page-heading -->

  <div class="main">

    <div class="event-overview">

      <?php
      $today = date('Ymd');

      $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'event',
        'meta_key'       => 'event_hide_after',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
        'meta_query'     => array(
          array(
            'key'     => 'event_hide_after',
            'compare' => '>',
            'value'   => $today,
          ),
        ),
      );

      query_posts($args)
      ?>

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php include('inc/event-card.php'); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <!-- end .event-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>