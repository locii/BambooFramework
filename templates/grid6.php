<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="grid6wrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('grid6'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('grid6')) { ?>
				
					<?php dynamic_sidebar('grid6'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>