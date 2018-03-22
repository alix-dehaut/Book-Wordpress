<?php get_header(); ?>

<div class="jumbotron">

<div class="container">
    <h1 class="display-3">Coups de coeur</h1>
    <p>Voici notre catégorie coups de coeur !</p>
</div>

</div>
<div class="container love <?php do_action( 'al_add_class' ); ?>">
	<div class="row">
		<div class="col-md-8 content">
			<?php get_template_part('content', 'paginate'); ?>
		</div><!-- ./content -->

		<div class="col-md-4 sidebar">
			<?php get_sidebar(); ?>
		</div><!-- ./sidebar -->	
	</div>
</div>

<?php get_footer(); ?>

