<section id="mainWrap">
	<div class="container">
		<div class="row-fluid">
		
			<?php if (roots_display_sidebar()) : ?>
				<aside class="sidebar span4 pull-left" role="complementary">
					  <?php include roots_sidebar_path(); ?>
				</aside><!-- /.sidebar -->
			<?php endif; ?>
			
		      
		      <div class="midCol span8 zen-content pull-right" role="main">
		        <?php include roots_template_path(); ?>
		      </div><!-- /.midCol -->
		      
		      
		  </div><!-- /.row-fluid -->
	</div><!-- /.container -->
</section><!--End main section -->