<nav id="navwrap">
  <div class="container">
  	<div class="row-fluid">
  		<div class="navwrapper navbar span12 nav <?php echo $menualign ?>">
  		
  			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  		        <span class="icon-list-ul"></span>
  		      </button>
  		      
  		      
  		      <div id="nav" class="nav-collapse collapse">
  		     <?php
  		       if (has_nav_menu('primary_navigation')) :
  		         wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
  		       endif;
  		     ?>
  		      </div>
	      
	     </div>
	   </div>
    </div>
  </div>
</nav>