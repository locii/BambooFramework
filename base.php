<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->



	<div id="fullwrap">
	  	<?php // Top row
	  	if(zen::count_position('top')) { get_template_part('templates/top'); } ?>
	  	
	  	<?php // logo
	  	get_template_part('templates/logo'); ?>
	  	
	  	<?php  //menu
	  	if (has_nav_menu('primary_navigation')) { get_template_part('templates/header'); }?>
	  	
	  	<?php //banner
	  	if(zen::count_position('banner')) { get_template_part('templates/banner'); } ?>
	  	
	  	<?php // Grid1
	  	if(zen::count_position('grid1')) { get_template_part('templates/grid1'); } ?>
		
		<?php // Grid2
		if(zen::count_position('grid2')) { get_template_part('templates/grid2'); } ?>
		
		<?php 
		// Grid3
		if(zen::count_position('grid3')) { get_template_part('templates/grid3'); } ?>
		
		
		<?php // Main Body
		get_template_part('templates/main'); ?>
		
		
		<?php // Grid4
		if(zen::count_position('grid4')) { get_template_part('templates/grid4'); } ?>
		
		<?php // Grid5
		if(zen::count_position('grid5')) { get_template_part('templates/grid5'); } ?>
		
		<?php // Grid6
		if(zen::count_position('grid6')) { get_template_part('templates/grid6'); } ?>
		
		<?php // Bottom 
		if(zen::count_position('bottom')) { get_template_part('templates/bottom'); } ?>
		
		<?php // Footer
		if(zen::count_position('footer')) { get_template_part('templates/footer'); } ?>
	</div>
	<?php // Back to Top
	get_template_part('features/totop'); ?>
	
	<?php // Lazyload
	get_template_part('features/layload'); ?>
	
	
	<?php // Google Fonts
	get_template_part('features/fonts'); ?>
</body>
</html>
