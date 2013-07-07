<?php  global $smof_data; ?>
<!-- LOGO -->
<section id="logowrap">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
			  	<div class="logo">
			    	<h2>
			     		 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo 	esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			      		<?php echo $smof_data['logotext']; ?>
			    		  </a>
			    	 </h2>
			    	 <div id="tagline">
			    	 	<span>
			    	 		<?php bloginfo( 'description' ); ?>
			    	 	</span>
			    	 </div>  
			  	</div>
			</div>
		</div>
	</div>
</section>
<!-- //LOGO -->
