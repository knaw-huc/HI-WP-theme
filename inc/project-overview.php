<?php
$args = array(
  'post_type' => 'project',
  'posts_per_page' => '-1',
);

// Button: Thema
if(isset($_GET['thema'])) {
  $args['tax_query'][] = array(
    'taxonomy' => 'thema',
    'field' => 'slug',
    'terms' => $_GET['thema']
  );
}

// Dropdown: Period
if(isset($_GET['period'])) {
  $args['tax_query'][] = array(
    'taxonomy' => 'period',
    'field' => 'slug',
    'terms' => $_GET['period']
  );
}

// Dropdown: Tag
if(isset($_GET['tag'])) {
  $args['tag'] = $_GET['tag'];
}

query_posts($args);
?>

<div class="project-overview" role="main">

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php include(get_template_directory() . '/inc/project-card.php'); ?>

    <?php endwhile; ?>
  <?php endif; ?>

</div>
<!-- end .project-overview -->