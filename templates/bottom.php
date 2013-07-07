<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="bottomwrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('bottom'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('bottom')) { ?>
				
					<?php dynamic_sidebar('bottom'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>