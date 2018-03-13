<?php get_header(); ?>

  <?php if( have_posts() ) { ?>

    <?php
    $allsearch = new WP_Query("s=$s&showposts=0");
    ?>

    <div class="page-heading">
      <h2><?= $allsearch->found_posts; ?> resultaten voor ‘<?php echo get_search_query(); ?>’</h2>
    </div>
    <!-- end .page-heading -->

    <?php
    $availableTypes = array('project', 'resource', 'post', 'event', 'profile', 'page');
    $types = array();

    foreach( $availableTypes as $type ) {
      while( have_posts() ){
        the_post();

        if( $type == get_post_type() ){

          if(!in_array($type, $types)) {
            $types[] = $type;
          }

        }
      }
    }
    ?>

    <?php
    foreach( $types as $type ) {
      include('inc/search/' . $type . '.php');
    }
    ?>

  <?php } else { ?>

    <div class="page-heading">
      <a class="page-heading__button" href="<?php bloginfo('url'); ?>">Terug naar de homepage</a>
      <h2>Resultaten voor ‘<?php echo get_search_query(); ?>’</h2>
    </div>
    <!-- end .page-heading -->

    <div class="main main--white">

      <main class="main__column main__column--body text-holder">
        <p>Niets gevonden.</p>
      </main>
      <!-- end .main__column -->

      <aside class="main__column main__column--aside main__column--empty sidebar">

      </aside>
      <!-- end .main__column -->

    </div>
    <!-- end .main -->

  <?php } ?>

<?php get_footer(); ?>