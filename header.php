<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <?php wp_head(  ); ?>

</head>

<body <?php body_class(); ?>>
  <div hidden>
    <!-- svg sprite here -->
  </div>

  <div id="sidr">
    <!-- mobile menu here -->
  </div>

  <header class="banner" role="banner">

    <div class="container banner__container">

      <div class="mainlogo">
        <a href="<?php bloginfo( 'url' ); ?>">
          <h1 class="screen-reader-text">IBON Foundation</h1>
          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/ibon-logo.svg">
        </a>
      </div>

      <nav class="banner__nav">

        <?php wp_nav_menu( array (
          'menu'				=> "mainmenu",
          'container_class'	=> "bannermenu",
          'fallback_cb'		=> "false",
          'theme_location'	=> "mainmenu",
        ) ); ?>

        <a id="menu-toggle" href="#sidr" class="menu-toggle"><i class="fas fa-bars"></i></a>

        <a id="search-toggle" href="#sidr" class="search-toggle"><i class="fa-solid fa-magnifying-glass"></i></a>

      </nav>

      
    </div> 

  </header>