<?php // Here be fonts 

// Check the options panel to see if Google fonts are required

	global $smof_data;
	
	$logofont = $smof_data['logofont']['face'];
	$navfont = $smof_data['navfont']['face'];
	$headingfont = $smof_data['headingfont']['face'];
	$bodyfont = $smof_data['bodyfont']['face'];
	
	
	$body_googlefont = $smof_data['body_googlefont'];
	$heading_googlefont = $smof_data['heading_googlefont'];
	$nav_googlefont = $smof_data['nav_googlefont'];
	$logo_googlefont = $smof_data['logo_googlefont'];
	
	
	
	if($logofont == "-1" || $navfont == "-1" ||$headingfont == "-1" ||$bodyfont == "-1") { 
	
	
		// Check to see if individual fonts should be added to the array
		if($logofont == "-1") $myfonts[] = "'$logo_googlefont'";
		if($headingfont == "-1") $myfonts[] = "'$heading_googlefont'";
		if($navfont == "-1") $myfonts[] = "'$nav_googlefont'";
		if($bodyfont == "-1") $myfonts[] = "'$logo_googlefont'";
		
		// Remove Duplicates
		$myfonts = array_unique($myfonts);
		
		// Remove comma from last font
		$lastfont = end($myfonts);
		
		//print_r($myfonts);
		
	?>
	<script type="text/javascript">
	      WebFontConfig = {
	      
	      google: {
	          families: [<?php foreach ($myfonts as $font) {echo $font; if (!($font == $lastfont)){echo ',';}} ?>]}
	      };
	      (function() {
	          var wf = document.createElement('script');
	          wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	          wf.type = 'text/javascript';
	          wf.async = 'true';
	          var s = document.getElementsByTagName('script')[0];
	          s.parentNode.insertBefore(wf, s);
	        })(); </script>
	<?php } ?>