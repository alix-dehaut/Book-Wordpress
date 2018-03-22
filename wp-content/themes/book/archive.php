<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			<?php if (have_posts()): while(have_posts()): the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
				<small><?php the_time('F JS, Y'); ?></small>
			
				<div class='entry'>
					<?php the_excerpt() ?> <!-- the_content() -->
				</div>
	
				<?php endwhile; else: ?>
				<p>Désolé il n'y a pas d'articles pour l'instant.</p>
				<?php endif; ?>	

				<div class="paginate">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center">
						<?php $lists= paginate_links(['type'=>'array'])?? [];
						foreach ($lists as $list):
							echo "<li>$list</li>";
						
						endforeach;
						?>	
						</ul>
					</nav>
				</div>
		</div><!-- ./content -->

		<div class="col-md-4 sidebar">
			<?php get_sidebar(); ?>
		</div><!-- ./sidebar -->
		
	</div>
</div>

<?php get_footer(); ?>