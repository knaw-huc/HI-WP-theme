<!DOCTYPE html>
<html>

  <head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Fonts -->
    <link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/CharisSIL-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/CharisSIL.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/Genericons.woff2" as="font" type="font/woff2" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Asul|Chivo" rel="stylesheet">

    <!-- CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

    <!-- Bugherd -->
    <script type="text/javascript">
      (function(d, t) {
        var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
        bh.type = 'text/javascript';
        bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=vaepnnmsrh6yfuuzj9acbg';
        s.parentNode.insertBefore(bh, s);
      })(document, 'script');
    </script>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <header class="header">

      <a class="logo" href="<?php bloginfo('url'); ?>">
        <img class="logo__desktop" src="<?php bloginfo('template_url'); ?>/img/logo-blue.svg" alt="Huygens ING">
        <img class="logo__mobile" src="<?php bloginfo('template_url'); ?>/img/logo-white.svg" alt="Huygens ING">
      </a>
      <!-- end .logo -->

      <div class="header__bar header__bar--navigation">

        <?php include('inc/navigation.php'); ?>

        <ul class="navigation navigation--open-search">
          <li class="navigation__item">
            <a href="#" class="navigation__item__button js-open-search">Zoeken</a>
          </li>
        </ul>
        <!-- end .navigation -->

      </div>
      <!-- end .header__bar -->

      <div class="header__bar header__bar--search">

        <form action="<?php bloginfo('url'); ?>" method="get" class="search-form">
          <input name="s" type="search" class="search-form__input" placeholder="Typ hier uw zoekterm">
        </form>
        <!-- end .header__search -->

        <ul class="navigation navigation--close-search">
          <li class="navigation__item">
            <a href="#" class="navigation__item__button js-close-search">Sluiten</a>
          </li>
        </ul>
        <!-- end .navigation -->

      </div>
      <!-- end .header__bar -->

      <a href="#" class="mobile-navigation__button js-toggle-mobile-navigation"></a>

    </header>
    <!-- end .header -->