<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="grid2wrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('grid2'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('grid2')) { ?>
				
					<?php dynamic_sidebar('grid2'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>

