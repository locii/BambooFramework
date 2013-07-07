<!-- Footer Row -->
<section id="footerwrap">
	<div class="container">
		<div class="row-fluid">
			<?php if(zen::count_position('footer')) { ?>
				<div id="banner" class="widgets-<?php echo zen::count_widgets('footer'); ?>">
					<?php dynamic_sidebar('footer'); ?>
				</div>
			<?php } ?>
		</div>
  	</div>
</section>

<?php wp_footer(); ?>
