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

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#002048">
    <meta name="msapplication-TileColor" content="#002048">
    <meta name="theme-color" content="#002048">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KNS2C4R');</script>

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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNS2C4R"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
          <input name="s" type="search" class="search-form__input" placeholder="Typ hier uw zoekterm en druk op enter">
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