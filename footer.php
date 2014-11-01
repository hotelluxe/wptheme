<footer class="clearfix">
  <div class="container clearfix">
  <?php
  wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'footer'
  ) );
  ?>
  <?php
  if ( is_active_sidebar( 'footer-widget-area' ) ) :
   dynamic_sidebar( 'footer-widget-area' );
  endif;
  ?>
  </div>
    
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
