<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Gibson's Gallery</title>




  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  

  <!-- GOOGLE FONTS -->
<!--   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet"> -->



  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

  <div id="page" class="site">

    <a href="#main" class="visually-hidden">Skip to main content</a>

    <!-- HEADER
    =================================================== -->
    <header class="topnav header" role="banner">
      <div class="top__bar"></div>
      <div class="wrapper topnav__wrapper">
        <a href="<?php echo esc_url(  home_url( '/' ) ); ?>" class="topnav__homelink hover-fade">
          <img src="<?php echo get_theme_file_uri(); ?>/img/gibsons_gallery_header.svg" alt="Gibson's Gallery homepage" class="topnav__logo" width="275" height="60">
        </a>
        <nav class="nav">
          <span id="nav-label" hidden>Navigation</span>
          <div id="overlay" class="topnav__overlay"></div>

          <button id="btnOpen" class="topnav__open" aria-expanded="false" aria-labelledby="nav-label">
            <img src="<?php echo get_theme_file_uri(); ?>/img/hamburger.svg" alt="hamburger menu" width="30" height="23">
          </button>

          <div
            id="menuTopNav"
            class="topnav__menu" 
            role="dialog" 
            aria-labelledby="nav-label">

            <button
              id="btnClose"
              class="topnav__close">
              <img src="img/close-button.svg" alt="" width="26" height="26" />
            </button>

            <?php
              wp_nav_menu( array(
                'theme_location'        =>  'header-menu',
                'container_aria_label'  =>  '',
                'container'             =>  false,
                'menu_class'            =>  'menu topnav__links',
                'menu_id'               =>  'menu',
                'echo'                  =>  true,
                'fallback_cb'           =>  'wp_page_menu',
                'before'                =>  '',
                'after'                 =>  '',
                'depth'                 =>  0
              ))
            ?>
            
          </div>
        </nav>
      </div>

    </header>
    <!-- ============================================== -->

    <!-- MAIN
    =================================================== -->
    <main id="main" class="main" role="main">


      