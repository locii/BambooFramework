<section class="banner navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
    	<div class="row-fluid">
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		      <a class="brand" href="<?php echo home_url(); ?>/">
		        <?php bloginfo('name'); ?>
		      </a>
		      <nav class="nav-main nav-collapse collapse" role="navigation">
		        <?php
		          if (has_nav_menu('primary_navigation')) :
		            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
		          endif;
		        ?>
		      </nav>
		  </div>
    </div>
  </div>
</section>
