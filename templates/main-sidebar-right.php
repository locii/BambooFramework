<section id="mainWrap">
	<div class="container">
		<div class="row-fluid">
		      
		      <div class="midCol <?php echo roots_main_class(); ?> zen-content" role="main">
		        <?php include roots_template_path(); ?>
		      </div><!-- /.midCol -->
		      
		      <?php if (roots_display_sidebar()) : ?>
		      	<aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
		      		  <?php include roots_sidebar_path(); ?>
		      	</aside><!-- /.sidebar -->
		      <?php endif; ?>
		      
		  </div><!-- /.row-fluid -->
	</div><!-- /.container -->
</section><!--End main section -->