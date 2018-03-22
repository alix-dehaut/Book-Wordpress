<?php get_header(); ?>

<div class="container">
	<div class="row <?php do_action( 'al_add_class' ); ?>">
		<div class="col-md-8 content">
			<?php get_template_part('content', 'paginate'); ?>
		</div><!-- ./content -->

		<div class="col-md-4 sidebar">
			<?php get_sidebar(); ?>
		</div><!-- ./sidebar -->
		
	</div>
</div>

<?php get_footer(); ?>