<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="grid1wrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('grid1'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('grid1')) { ?>
				
					<?php dynamic_sidebar('grid1'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>