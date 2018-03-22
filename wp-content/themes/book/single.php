<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			<?php if (have_posts()): while(have_posts()): the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content() ?></p> 
			
			<ul class="list-group">
			  <li class="list-group-item">Auteur: <?php the_author_posts_link(); ?></li>
			  <li class="list-group-item">Publier dans: <?php the_category(','); ?></li>
			</ul>

			<?php endwhile; else: ?>
			<p>Désolé il n'y a pas d'articles pour l'instant.</p>
			<?php endif; ?>	
		</div><!-- ./content -->

		<div class="col-md-4 sidebar">
			<?php get_sidebar(); ?>
		</div><!-- ./sidebar -->
	</div>

</div>

<?php get_footer(); ?>
