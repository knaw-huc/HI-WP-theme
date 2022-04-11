<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?= get_the_permalink(get_page_by_path('informatie/evenementen')); ?>"><?php _e('Terug naar het overzicht', 'huygens'); ?></a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body main__column--event text-holder" role="main">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <p class="date"><?php the_field('event_date'); ?></p>

          <h1><?php the_title(); ?></h1>

          <?php include('inc/tag-list.php'); ?>

          <?php if(get_field('event_location') || get_field('event_time')) { ?>

            <hr>

            <?php if(get_field('event_location')) { ?>

              <div class="event-meta">
                <span class="event-meta__name"><?php _e('Locatie', 'huygens'); ?></span>
                <span class="event-meta__value">
                  <?php the_field('event_location'); ?>
                </span>
              </div>
              <!-- end .event-meta -->

            <?php } ?>

            <?php if(get_field('event_time')) { ?>

              <div class="event-meta">
                <span class="event-meta__name"><?php _e('Aanvang/einde', 'huygens'); ?></span>
                <span class="event-meta__value"><?php the_field('event_time'); ?></span>
              </div>
              <!-- end .event-meta -->

            <?php } ?>

            <hr>

          <?php } ?>

          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside sidebar">
      <?php include('inc/sidebar/rsvp.php'); ?>
      <?php include('inc/sidebar/contactperson.php'); ?>
      <?php include('inc/sidebar/related-projects.php'); ?>
      <?php include('inc/sidebar/related-profiles.php'); ?>
    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>