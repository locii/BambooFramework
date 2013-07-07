<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <div id="fullwrap">

  <?php zen::layoutBuilder('home_layout'); ?>
 
        </div>
        <?php // Back to Top
        get_template_part('features/totop'); ?>
        
        <?php // Lazyload
        get_template_part('features/lazyload'); ?>
        
        
        <?php // Google Fonts
        get_template_part('features/fonts'); ?>
      
      </body>
      </html>