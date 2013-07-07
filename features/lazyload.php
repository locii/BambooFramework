<?php // Lazyload

global $smof_data;

if($smof_data['lazyload']) {?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("<?php echo $smof_data['llselector'] ?>").not("<?php echo $smof_data['notllselector'] ?>").lazyload({
			effect : "fadeIn"
		});
});
</script>
<?php } 
