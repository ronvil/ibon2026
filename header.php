<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

  <script src="https://kit.fontawesome.com/1cda5f9732.js" crossorigin="anonymous"></script>

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
  <div class="lightboxsearch" id="lightboxsearch" style="display: none;">
    <?php get_search_form(); ?>
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

        <a id="search-toggle" href="#lightboxsearch" class="search-toggle"><i class="fa-solid fa-magnifying-glass"></i></a>

      </nav>

      
    </div> 

  </header>