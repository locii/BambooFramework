<?php // Back to top code

global $smof_data;

if($smof_data['totop']) {?>

<div id="toTop" class="hidden-phone">
	<a id="toTopLink">
		<span class="icon-arrow-up"></span>
		<span id="toTopText"> Back to top</span>
	</a>
</div>

<script type="text/javascript">
	jQuery(document).ready(function(){
			
			jQuery(window).scroll(function () {
			
				if (jQuery(this).scrollTop() >200) {
				 	jQuery("#toTop").fadeIn();
				}
				else {
				 	jQuery("#toTop").fadeOut();
				}
			});
		
			jQuery("#toTop").click(function() {
				jQuery("html, body").animate({ scrollTop: 0 }, "slow");
				 return false;
			});
	});
</script>
<?php } ?>