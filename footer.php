    <!-- TODO: Make footer dynamic -->
    <footer class="footer">

      <div class="footer__inner">

        <div class="footer__column">

          <h2>Contact</h2>

          <p>
            Ons bezoekadres:<br />
            Spinhuis<br />
            Oudezijds Achterburgwal 185<br />
            1012 DK AMSTERDAM
          </p>

          <p>
            Ons postadres:<br />
            Huygens ING<br />
            Postbus 10855<br />
            1001 EW  AMSTERDAM
          </p>

          <p>
            <a href="mailto:info@huygens.knaw.nl">info@huygens.knaw.nl</a><br />
            +31 (0)20 — 224 68 00
          </p>

        </div>
        <!-- end .footer__column -->

        <div class="footer__column">

          <h2>Huygens ING</h2>

          <p>Door middel van inspirerend onderzoek en het maken van innovatieve tools maakt het Huygens ING oude ontoegankelijke bronnen begrijpbaar en toepasbaar. Dit doen we op het gebied van Wetenschaps- geschiedenis, Letterkunde en Politiek institutionele geschiedenis en Digital Humanities.</p>

        </div>
        <!-- end .footer__column -->

        <div class="footer__column">

          <h2>Huygens werkt mee aan</h2>

          <ul class="logo-holder">
            <li class="logo-holder__item">
              <a href="https://literatuurmuseum.nl/" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/img/logo-literatuurmuseum.svg" alt="">
              </a>
            </li>
            <li class="logo-holder__item">
              <a href="https://www.historici.nl/" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/img/logo-historici.svg" alt="">
              </a>
            </li>
          </ul>
          <!-- end .logo-holder -->

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