<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="grid3wrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('grid3'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('grid3')) { ?>
				
					<?php dynamic_sidebar('grid3'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>