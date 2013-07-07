<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
  
  <?php global $smof_data;?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/template.css" rel="stylesheet" />
  
  <?php 
  
  if($smof_data['responsive']) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/template-responsive.css" rel="stylesheet" />
  <?php }
  
  $customcss =  get_theme_root() . '/'.get_template().'/assets/css/custom.css';

  if (file_exists($customcss)){?>
  
  <!-- CUSTOM CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet" />
  <!-- //CUSTOM CSS -->
  
  <?php } ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  
  
  <!-- Fonts -->
  <?php 
  
  global $smof_data;
  $logofont = $smof_data['logofont']['face'];
  $navfont = $smof_data['navfont']['face'];
  $headingfont = $smof_data['headingfont']['face'];
  $bodyfont = $smof_data['bodyfont']['face'];
  $logoclass = $smof_data['logoclass'];
  
  $basefontsize = $smof_data['basefontsize'];
  $body_googlefont = $smof_data['body_googlefont'];
  $heading_googlefont = $smof_data['heading_googlefont'];
  $nav_googlefont = $smof_data['nav_googlefont'];
  $logo_googlefont = $smof_data['logo_googlefont'];
  
  
  function cleanFonts($subject) {
  	$font = explode(':', str_replace("+", " ", $subject));
  	return $font[0];
  }
  
  ?>
  <style type="text/css">
  <?php 
  
  	if($bodyfont == "-1") { ?>
  			html > body {font-family: <?php echo cleanFonts($body_googlefont); ?>;font-size: <?php echo $basefontsize ?> }
  	<?php } else { ?>
  			html > body {font-family: <?php echo $bodyfont; ?>;font-size: <?php echo $basefontsize ?>}
  	<?php } 
  
  		if($headingfont == "-1") { 
  			?>
  			h1, h2, h3, h4, h5, h6, blockquote {font-family: <?php echo cleanFonts($heading_googlefont); ?>}
  	<?php } else {  ?>
  			h1, h2, h3, h4, h5, h6, blockquote {font-family: <?php echo $headingfont ?>}
  	<?php }
  		if($navfont == "-1") { ?>
  			#navwrap li {font-family: <?php echo cleanFonts($nav_googlefont); ?>}
  	<?php } else {?>
  			#navwrap li {font-family: <?php echo $navfont ?>}
  	<?php }
  		if($logofont == "-1") { ?>
  			.logo <?php echo $logoclass ?>{font-family: <?php echo cleanFonts($logo_googlefont); ?>;
  			}
  	<?php } else { ?>
  			.logo <?php echo $logoclass ?>  {font-family: <?php echo $logofont ?>}
  	<?php } ?>
  	
  	<?php if( 	
  			$bodyfont === "League Gothic" || 
  			$headingfont === "League Gothic" || 
  			$navfont === "League Gothic" || 
  			$logofont === "League Gothic") { ?>
  				@font-face {
  				  font-family: 'League Gothic Regular';
  				  src: url('<?php echo T3_TEMPLATE_URL ?>/fonts/League_Gothic.eot');
  				  src: local('League Gothic Regular'), local('LeagueGothic-Regular'), url('League_Gothic.otf') format('opentype');
  				}
  	<?php }?>
  </style>
  
    <?php  //fetch options stored in $data;
   global $smof_data;
    echo $smof_data['google_analytics']; ?>
</head>
