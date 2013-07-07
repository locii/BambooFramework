<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="topwrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('top'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('top')) { ?>
				
					<?php dynamic_sidebar('top'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>