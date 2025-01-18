<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RJZH22JEEY"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-RJZH22JEEY");
  </script>

  <script type="text/javascript" language="javascript">
    var vc_pid = "888738248";
  </script>
  <script type="text/javascript" src="//aml.valuecommerce.com/vcdal.js" async></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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