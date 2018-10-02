<?php get_header(); ?>

  <div class="page-heading">
    <?php if(is_page() && $post->post_parent) { ?>
      <a class="page-heading__button" href="<?php the_permalink($post->post_parent); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
    <?php } ?>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside main__column--empty sidebar">

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>