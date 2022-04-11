<?php
/**
* Template name: Pagina met sidebar
 */
?>

<?php get_header(); ?>

  <div class="page-heading">
    <?php if(is_page() && $post->post_parent) { ?>
      <a class="page-heading__button" href="<?php the_permalink($post->post_parent); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
    <?php } ?>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder" role="main">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">
      <?php include('inc/sidebar/related-projects.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
      <?php include('inc/sidebar/links.php'); ?>
      <?php include('inc/sidebar/related-posts.php'); ?>
      <?php include('inc/sidebar/related-events.php'); ?>
      <?php include('inc/sidebar/text.php'); ?>
    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>