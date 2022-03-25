<?php
$args = array(
  'post_type' => 'resource',
  'posts_per_page' => '-1',
  'tax_query' => array(
    'relation' => 'AND',
  ),
  'orderby' => 'title',
  'order' => 'ASC',
);

// Checkbox: Type
if(isset($_GET['rtype']) && strlen($selected_types[0]) > 0) {
  $args['tax_query'][] = array(
    'taxonomy' => 'resource_type',
    'field'    => 'term_id',
    'terms'    => $selected_types,
    'operator' => 'IN',
  );
}

// Checkbox: Periode
if(isset($_GET['rperiod']) && strlen($selected_periods[0]) > 0) {
  $args['tax_query'][] = array(
    'taxonomy' => 'period',
    'field'    => 'term_id',
    'terms'    => $selected_periods,
    'operator' => 'IN',
  );
}

// Checkbox: Onderwerp
if(isset($_GET['rtag']) && strlen($selected_tags[0]) > 0) {
  $args['tax_query'][] = array(
    'taxonomy' => 'post_tag',
    'field'    => 'term_id',
    'terms'    => $selected_tags,
    'operator' => 'IN',
  );
}

query_posts($args);
?>

<div class="resource-overview__list">

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php include(get_template_directory() . '/inc/resource-card.php'); ?>

    <?php endwhile; ?>
  <?php endif; ?>

</div>
<!-- end .resource-overview__list -->