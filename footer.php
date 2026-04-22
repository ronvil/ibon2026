  <footer role="contentinfo" class="mainfooter">

    <div class="socialnav">

      <div class="socialnav__container container">

        <div class="footerlogo">
          <a href="<?php bloginfo( 'url' ); ?>">
            <h1 class="screen-reader-text">Ibon Foundation</h1>
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/ibon-logo-white.svg">
          </a>
        </div>

        <nav class="sociallinks">
          <a href="https://facebook.com/IBONFoundation" target="_blank" rel="nofollow"><span class="screen-reader-text">Visit us on Facebook</span><i class="fa-brands fa-facebook"></i></a>
          <a href="https://instagram.com/ibonfoundation" target="_blank" rel="nofollow"><span class="screen-reader-text">Visit us on Instagram</span><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.threads.net/@ibonfoundation" target="_blank" rel="nofollow"><span class="screen-reader-text">Follow us on Threads</span><i class="fa-brands fa-threads"></i></a>
          <a href="https://twitter.com/IBONFoundation" target="_blank" rel="nofollow"><span class="screen-reader-text">Visit us on X</span><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://bsky.app/profile/ibonfoundation.bsky.social" target="_blank" rel="nofollow"><span class="screen-reader-text">Follow us on Bluesky</span><i class="fa-brands fa-bluesky"></i></a>
          <a href="https://tiktok.com/@ibonfoundation" target="_blank" rel="nofollow"><span class="screen-reader-text">Follow us on TikTok</span><i class="fa-brands fa-tiktok"></i></a>
          <a href="https://youtube.com/@IBONFoundation1978" target="_blank" rel="nofollow"><span class="screen-reader-text">Visit our YouTube channel</span><i class="fa-brands fa-youtube"></i></a>
        </nav>


      </div>

    </div>

    <div class="footernav">
      <div class="footernav__container container">

        <?php wp_nav_menu( array (
          'menu'				=> "footermenu",
          'container_class'	=> "footermenu",
          'fallback_cb'		=> "false",
          'theme_location'	=> "footermenu",
          'container' => 'nav'
        ) ); ?>

      </div>
    </div>

    <div class="legal">
      <div class="legal__container container">

        <p><small>Copyright 2026. IBON Foundation. Quezon City, Philippines. Some rights reserved.</small></p>

        <div class="privacylink">
          <small><a href="#">Privacy Policy</a></small>
        </div>

      </div>
    </div>

  </footer>

  <?php wp_footer(  ); ?>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

</body>

</html>