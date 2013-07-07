<?php
/**
 * Custom functions
 */



class zen {
	// Initialise Widgetsemergin
	
	
	 /**
	* Theme Options
	* 
	* @return self
	*/	
	//public static function themeOptions()
	//{
	//   $themeOptions = get_theme_root() . '/'.get_template().'/theme-options.xml';
	//   $themeOptions = split(',',file_get_contents($themeOptions));
	//   return $themeOptions;
	//}
	
	
	
	//public function widget_positions() {
	
	//		$positions = self::themeOptions();	
	//		return $positions;			
	//}
	
	
	
	public function widget_positions() {
	
			$positions = array('top','banner','grid1','grid2','grid3','sidebar-1','sidebar-2','above','below','grid4','grid5','grid6','bottom','footer');	
			
			return $positions;			
	}
	

	/**
	 * 	Function to test if a widget i spublished
	 *
	 * 	Returns true if published
	 */
	 
	public function count_position($position) {
	
		$widgets = get_option('sidebars_widgets');
		
		if(isset($widgets[$position])) {
			$count = count($widgets[$position]);
			
			if($count > 0) return 12/$count;
		}
		
	}
	
	
	/**
	 * 	Function to test the number of widgets published in a given position
	 *	And then determine the number of columns for that widget
	 * USed to count when there are more than one widgets in a row
	 * 	Returns integer
	 */
	 
	public function count_widgets($position) {
		
		$the_sidebars = wp_get_sidebars_widgets();
		return 12/(count( $the_sidebars[$position] ));
	
	}
	
	
	
	/**
	 * 	Function to test the number of widgets published in a given row
	 *	And then determine the number of columns for that widget
	 * USed to count when there are more than one widgets in a row
	 * 	Returns integer
	 */
	 
	public function block_width(array $positions) {
		
		$count = 0;
		
		for ($i = 0; $i < count($positions); $i++) {
			if(zen::count_position($positions[$i])) {
				$count += intval(1);
			}
		}
	
		return 12/$count;	
	}
	
	
	
	public function layoutBuilder($layout) {
	
		global $smof_data;
		$layout = $smof_data[$layout]['enabled'];
		  
		  if ($layout):
		  
		  foreach ($layout as $key=>$value) {
		  
		      switch($key) {
		  
		  		// Banner
			    case 'top':
		     		if(zen::count_position('top')) { get_template_part('templates/top'); } 
		      	break;
		      	
		      	// Banner
		      	case 'banner':
		      			if(zen::count_position('banner')) { get_template_part('templates/banner'); } 
		      	break;
		      	
		      	// Menu
		      	case 'menu':
		      			if(zen::count_position('banner')) { get_template_part('templates/menu'); } 
		      	break;
		      	
		      	
		      	// Grid1
		      	case 'grid1':
		      			if(zen::count_position('grid1')) { get_template_part('templates/grid1'); } 
		      	break;
		      	
		      	// Grid2
		      	case 'grid2':
		      			if(zen::count_position('grid2')) { get_template_part('templates/grid2'); } 
		      	break;
		      	
		      	// Grid3
		      	case 'grid3':
		      			if(zen::count_position('grid3')) { get_template_part('templates/grid3'); } 
		      	break;
		      	
		      	
		      	// Main
		      	case 'nav':
		      			 get_template_part('templates/header'); 
		      	break;
		      	
		      	
		      	// Logo
		      	case 'logo':
		      			 get_template_part('templates/logo'); 
		      	break;
		      	
		      	
		      	// Main
		      	case 'main':
		      			 get_template_part('templates/main'); 
		      	break;
		      	
		      	
		      	// Main
		      	case 'main-sidebar-left':
		      			 get_template_part('templates/main-sidebar-left'); 
		      	break;
		      	
		      	
		      	// Main
		      	case 'main-sidebar-right':
		      			 get_template_part('templates/main-sidebar-right'); 
		      	break;
		      
		      
		      	// Grid4
		      	case 'grid4':
		      		if(zen::count_position('grid4')) { get_template_part('templates/grid4'); } 
		      	break;
		      
		      	// Grid5
		      	case 'grid5':
		      		if(zen::count_position('grid5')) { get_template_part('templates/grid5'); } 
		      	break;
		 
		 
		     	// Grid1
		     	case 'grid6':
		     		if(zen::count_position('grid6')) { get_template_part('templates/grid6'); } 
		     	break;
		 	      
		     	// Bottom
		     	case 'bottom':
		      		if(zen::count_position('bottom')) { get_template_part('templates/bottom'); } 
		      	break;
		  
		  
				// Footer
				case 'footer':
						if(zen::count_position('footer')) { get_template_part('templates/footer'); } 
				break;
		
				
				// Slideshow
				case 'slideshow':
						get_template_part('features/slideshow'); 
				break;
				
				// Tabs
				case 'tabs':
						get_template_part('features/tabs'); 
				break;
				
				// Carousel
				case 'carousel':
						get_template_part('features/carousel'); 
				break;
				}
		  }
		  
		  endif;
	}
	
}