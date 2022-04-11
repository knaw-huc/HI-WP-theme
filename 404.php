<?php get_header(); ?>

  <div class="page-heading">
    <a class="page-heading__button" href="<?php bloginfo('url'); ?>"><?php _e('Terug naar de homepage', 'huygens'); ?></a>
  </div>
  <!-- end .page-heading -->

  <div class="main main--white">

    <main class="main__column main__column--body text-holder" role="main">

      <h1><?php _e('Deze pagina is niet gevonden', 'huygens'); ?></h1>
      <h5><?php _e('Sorry! De pagina die je zoekt bestaat niet of niet meer.', 'huygens'); ?></h5>

    </main>
    <!-- end .main__column -->

    <aside class="main__column main__column--aside main__column--empty sidebar">

    </aside>
    <!-- end .main__column -->

  </div>
  <!-- end .main -->

<?php get_footer(); ?>