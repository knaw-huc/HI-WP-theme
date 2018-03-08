    <footer class="footer">

      <div class="footer__inner">

        <div class="footer__column">

          <h2><?php the_field('footer_column_1_heading', 'options'); ?></h2>

          <?php the_field('footer_column_1_text', 'options'); ?>

        </div>
        <!-- end .footer__column -->

        <div class="footer__column">

          <h2><?php the_field('footer_column_2_heading', 'options'); ?></h2>

          <?php the_field('footer_column_2_text', 'options'); ?>

        </div>
        <!-- end .footer__column -->

        <div class="footer__column">

          <h2><?php the_field('footer_column_3_heading', 'options'); ?></h2>

          <?php if( have_rows('footer_column_3_logos', 'options') ): ?>

            <ul class="logo-holder">

              <?php while ( have_rows('footer_column_3_logos', 'options') ) : the_row(); ?>

                <li class="logo-holder__item">
                  <a href="<?php the_sub_field('url'); ?>" target="_blank">
                    <?php echo wp_get_attachment_image(get_sub_field('logo')['id'], 'footer-logo--regular', 0); ?>
                  </a>
                </li>

              <?php endwhile; ?>

            </ul>
            <!-- end .logo-holder -->

          <?php endif; ?>

        </div>
        <!-- end .footer__column -->

      </div>
      <!-- end .footer__inner -->

    </footer>
    <!-- end .footer -->

    <div class="mobile-navigation">

      <a href="#" class="mobile-navigation__button js-toggle-mobile-navigation"></a>

      <?php include('inc/navigation.php'); ?>

      <form action="<?php bloginfo('url'); ?>" method="get" class="search-form">
        <input name="s" type="search" class="search-form__input" placeholder="Zoeken">
      </form>
      <!-- end .header__search -->

    </div>
    <!-- end .mobile-navigation -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-3.2.1.min.js"><\/script>');
    </script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/SmoothScroll.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.fitvids.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    <?php wp_footer(); ?>

  </body>

</html>