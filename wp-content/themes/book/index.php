
<?php get_header(); ?>

<div class="jumbotron">

<div class="container">
    <h1 class="display-3">Bienvenu sur notre site</h1>
    <p>Ce site propose des articles sur des livres et un catalogue de livres</p>
</div>
</div>
<div class="container">
	<div class="row <?php do_action( 'al_add_class' ); ?>">
		<?php get_template_part('content', 'home'); ?>	
	</div>
</div>

<?php get_footer(); ?>


