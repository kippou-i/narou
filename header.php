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

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrapper" ontouchstart="">
    <div class="wrapper_top">
      <header class="wrapper_top_sub header">
        <h1 class="header_title">
          <picture class="header_title_pict">
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/src/img/header_title-sp.png" width="400" height="308">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/header_title-pc.png" alt="なろう本文検索" width="614" height="476">
          </picture>
        </h1>

        <button class="header_hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav class="header_nav">
          <ul>
            <li class="current"><a href="<?php echo home_url(); ?>">本文検索</a></li>
            <li><a href="<?php echo home_url(); ?>/kappo/">活動報告検索</a></li>
            <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
            <li>運営：いと
              <span class="contactMenu contactMenu_twitter">
                <a href="https://twitter.com/ykllog" target="_blank" rel="noopener noreferrer">
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="m459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                  </svg>
                </a>
              </span>
              <span class="contactMenu contactMenu_mail">
                <a href="<?php echo home_url(); ?>/contact/">
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="m48 64c-26.5 0-48 21.5-48 48 0 15.1 7.1 29.3 19.2 38.4l217.6 163.2c11.4 8.5 27 8.5 38.4 0l217.6-163.2c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48zm-48 112v208c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64v-208l-217.6 163.2c-22.8 17.1-54 17.1-76.8 0z" />
                  </svg>
                </a>
              </span>
            </li>
            <li><span class="br">※「小説家になろう」は</span><span class="br">株式会社ヒナプロジェクトの登録商標です</span></li>
          </ul>
        </nav>

        <div class="darkSwitch">
          <p class="darkSwitch_text">dark mode</p>
          <div class="darkSwitch_inner">
            <input type="checkbox" name="darkSwitch" class="darkSwitch_checkbox" id="darkSwitch_btn" tabindex="0">
            <label class="darkSwitch_label" for="darkSwitch_btn">
              <span class="darkSwitch_label_inner"></span>
              <span class="darkSwitch_label_switch"></span>
            </label>
          </div>
        </div>
      </header>

      <div class="wrapper_top_main">
        <main class="main topMain">