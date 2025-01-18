<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PN4CDQV');
  </script>
  <!-- End Google Tag Manager -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN4CDQV"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="wrapper" ontouchstart="">

    <div class="wrapper__top">
      <div class="dark-switch">
        <p class="dark-switch__text">dark mode</p>
        <div class="dark-switch__inner">
          <input type="checkbox" name="dark-switch" class="dark-switch__checkbox" id="dark-switch__btn" tabindex="0">
          <label class="dark-switch__label" for="dark-switch__btn">
            <span class="dark-switch__label__inner"></span>
            <span class="dark-switch__label__switch"></span>
          </label>
        </div>
      </div>

      <header class="wrapper__top__sub header">
        <h1 class="header__title">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/header_title-sp.png" width="400" height="308">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/header_title-pc.png" alt="なろう本文検索" width="614" height="476">
          </picture>
        </h1>

        <nav class="header__nav">
          <?php
          $header__nav = array(
            'theme_location' => 'header__nav',
            'container' => false,
          );
          wp_nav_menu($header__nav);
          ?>
        </nav>
      </header>

      <div class="wrapper__top__main">
        <main class="main">