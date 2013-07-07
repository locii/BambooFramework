<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="grid4wrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('grid4'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('grid4')) { ?>
				
					<?php dynamic_sidebar('grid4'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>

