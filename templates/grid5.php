<?php  global $smof_data; ?>
<!-- Top Row -->
<section id="grid5wrap">
	<div class="container zen-count zen-count-<?php echo zen::count_position('grid5'); ?>">
		<div class="row-fluid">
			<?php if(zen::count_position('grid5')) { ?>
				
					<?php dynamic_sidebar('grid5'); ?>
				
			<?php } ?>
		</div>
  	</div>
</section>