<!-- Grid1 Row -->

<section id="grid1wrap">
	<div class="container">
		<div class="row-fluid">
			<?php if(zen::count_position('banner')) { ?>
				<div id="banner" class="widgets-<?php echo zen::count_widgets('banner'); ?>">
					<?php dynamic_sidebar('banner'); ?>
				</div>
			<?php } ?>
		</div>
  	</div>
</section>