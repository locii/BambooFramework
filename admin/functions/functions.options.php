<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"grid1"		=> "Grid1",
				"grid2"		=> "Grid2",
				"grid3"		=> "Grid3",
				"main-sidebar-left"		=> "Main + left",
				"main-sidebar-right"		=> "Main + right",
				"grid4"		=> "Grid4",
				"grid5"		=> "Grid5",
				"grid6"		=> "Grid6",
				"slideshow"	=> "Slideshow",
				"tabs"		=> "Tabs",
				"carousel"		=> "Carousel",
			), 
			"enabled" => array (
				"placebo" 	=> "placebo", //REQUIRED!
				"top"		=> "Top",
				"logo"		=> "Logo",
				"nav"		=> "Nav",
				"banner"	=> "Banner",
				"main"		=> "Main",
				"bottom"	=> "Bottom",
				"footer"	=> "Footer"
		
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = STYLESHEETPATH. '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_bloginfo('template_url').'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();



$of_options[] = array( 	"name" 		=> "General Settings",
						"type" 		=> "heading"
				);
					
$of_options[] = array( 	"name" 		=> "Overview",
						"desc" 		=> "",
						"id" 		=> "introduction",
						"std" 		=> "
						<img style='margin:40px auto;display:block' src='http://www.joomlabamboo.com/images/stories/zenbase/ZenbaseTemplateFrontImage.jpg' alt='Zen base' />
						Zenbase is a vanilla starter theme built ont he Roots framework with the SMOF options framework.",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
				
$of_options[] = array( 	"name" 		=> "Tracking Code",
						"desc" 		=> "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
						"id" 		=> "google_analytics",
						"std" 		=> "",
						"type" 		=> "textarea"
				);
				
$of_options[] = array( 	"name" 		=> "Logo Settings",
						"type" 		=> "heading"
				);


$of_options[] = array( 	"name" 		=> "Select a Category",
						"desc" 		=> "A list of all the categories being used on the site.",
						"id" 		=> "logotype",
						"std" 		=> "Select a category:",
						"type" 		=> "select",
						"options" 	=> array("Text", "Image")
				);
				
				
$of_options[] = array( 	"name" 		=> "Logo text",
						"desc" 		=> "Enter the text to use for your logo here",
						"id" 		=> "logotext",
						"std" 		=> "",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "LogoFont",
						"desc" 		=> "Enter the font family to use for your logo.",
						"id" 		=> "logofont",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);
				
				
$of_options[] = array( 	"name" 		=> "Logo google font",
						"desc" 		=> "Enter the name of the google font to use for the logo.",
						"id" 		=> "logo_googlefont",
						"std" 		=> "",
						"type" 		=> "text"
				);

				
$of_options[] = array( 	"name" 		=> "Logo Image",
						"desc" 		=> "Image to use for logo.",
						"id" 		=> "logoimage",
						"std" 		=> "",
						"type" 		=> "upload"
				);

$of_options[] = array( 	"name" 		=> "Logo Class",
						"desc" 		=> "Enter the class you would like to use to wrap around your logo",
						"id" 		=> "logoclass",
						"std" 		=> "",
						"type" 		=> "text"
				);

// Home page layout	
$of_options[] = array( 	"name" 		=> "Home Page Layout",
						"type" 		=> "heading"
				);			
$of_options[] = array( "name" => "Homepage Layout Manager",
						"desc" => "Organize how you want the layout to appear on the homepage",
						"id" => "home_layout",
						"std" => $of_options_homepage_blocks,
						"type" => "sorter");
						
						
// Home page layout	
$of_options[] = array( 	"name" 		=> "Page Layout",
						"type" 		=> "heading"
				);			
$of_options[] = array( "name" => "Page Layout Manager",
						"desc" => "Organize how you want the layout to appear on single pages.",
						"id" => "page_layout",
						"std" => $of_options_homepage_blocks,
						"type" => "sorter");
			
// Home page layout	
$of_options[] = array( 	"name" 		=> "Category Layout",
						"type" 		=> "heading"
				);			
$of_options[] = array( "name" => "Category Layout Manager",
						"desc" => "Organize how you want the layout to appear on category pages.",
						"id" => "category_layout",
						"std" => $of_options_homepage_blocks,
						"type" => "sorter");


// Fonts	
$of_options[] = array( 	"name" 		=> "Fonts",
						"type" 		=> "heading"
				);			
				
$of_options[] = array( 	"name" 		=> "Base font size",
						"desc" 		=> "Enter the px, em or % value that you want to set as the base font size.",
						"id" 		=> "basefontsize",
						"std" 		=> "80%",
						"type" 		=> "text"
				);


$of_options[] = array( 	"name" 		=> "Body Font",
						"desc" 		=> "Enter the font family to use for your body text.",
						"id" 		=> "bodyfont",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);

$of_options[] = array( 	"name" 		=> "Body google font",
						"desc" 		=> "Enter the name of the google font to use for the body.",
						"id" 		=> "body_googlefont",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Nav Font",
						"desc" 		=> "Enter the font family to use for your menu items.",
						"id" 		=> "navfont",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);
				

$of_options[] = array( 	"name" 		=> "Nav google font",
						"desc" 		=> "Enter the name of the google font to use for the menu.",
						"id" 		=> "nav_googlefont",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Heading Font",
						"desc" 		=> "Enter the font family to use for your headings.",
						"id" 		=> "headingfont",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);
				
$of_options[] = array( 	"name" 		=> "Headings google font",
						"desc" 		=> "Enter the name of the google font to use for the heading tags.",
						"id" 		=> "heading_googlefont",
						"std" 		=> "",
						"type" 		=> "text"
				);				


// Effects
$of_options[] = array( 	"name" 		=> "Effects",
						"type" 		=> "heading"
				);


$of_options[] = array( 	"name" 		=> "Back to top",
						"desc" 		=> "Enable the back to top feature.",
						"id" 		=> "totop",
						"std" 		=> 0,
						"type" 		=> "switch"
				); 			

$of_options[] = array( 	"name" 		=> "Lazyload",
						"desc" 		=> "Enable the lazyload effect",
						"id" 		=> "lazyload",
						"std" 		=> 0,
						"folds"		=> 1,
						"type" 		=> "switch"
				);

$of_options[] = array( 	"name" 		=> "Lazyload selector",
						"desc" 		=> "Enter the selector you want to target to lazy load images in..",
						"id" 		=> "llselector",
						"fold" 		=> "lazyload", 
						"std" 		=> "img",
						"type" 		=> "text"
				);	
$of_options[] = array( 	"name" 		=> "Lazyload not selector",
						"desc" 		=> "Enter the selector you do not want to target the lazy load efefct with",
						"id" 		=> "notllselector",
						"fold" 		=> "lazyload", 
						"std" 		=> "",
						"type" 		=> "text"
				); 
				
				
// Effects
$of_options[] = array( 	"name" 		=> "Responsive",
						"type" 		=> "heading"
				);
			
			
$of_options[] = array( 	"name" 		=> "Enable responsive style sheet",
						"desc" 		=> "If this option is enabled your site will scale according to the width of the browser..",
						"id" 		=> "responsive",
						"std" 		=> 0,
						"type" 		=> "switch"
				); 	
								
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
