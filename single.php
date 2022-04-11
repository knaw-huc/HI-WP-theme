<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie/nieuws')); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder" role="main">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <p class="meta"><?php the_time('d-m-Y'); ?></p>

          <h1><?php the_title(); ?></h1>

          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">

      <?php include('inc/sidebar/related-projects.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
      <?php include('inc/sidebar/text.php'); ?>

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

  <?php $displayedPosts[] = $post->ID; ?>

  <div class="main">

    <div class="content-overview">

      <h4 class="content-overview__heading"><?php _e('Gerelateerde nieuwsberichten', 'huygens'); ?></h4>

      <div class="project-overview">

        <?php $posts = get_field('related_posts'); ?>

        <?php if($posts): ?>

          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

            <?php setup_postdata($post); ?>

            <?php include('inc/news-card.php'); ?>

            <?php $displayedPosts[] = $post->ID; ?>

          <?php endforeach; ?>

          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

        <?php endif; ?>

        <?php
        $args = array(
          'posts_per_page' => 3 - count($displayedPosts) + 1,
          'post__not_in'   => $displayedPosts
        );

        query_posts($args)
        ?>

        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php include('inc/news-card.php'); ?>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <!-- end .project-overview -->

    </div>
    <!-- end .content-overview -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>