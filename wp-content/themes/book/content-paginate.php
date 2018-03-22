<?php if (have_posts()): while(have_posts()): the_post(); ?>

	<div class="row">
		<?php if (has_post_thumbnail()): ?>
		<div class="col-md-4 category__paginate">
			<a href="<?php the_permalink(); ?>">
			  <?php the_post_thumbnail('thumbnail', ['class' => 'img-responsive',]); ?>
			</a>
		</div><!-- .col-md-4 -->
		<?php endif; ?>
		
		<div class="col-md-8">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class='entry'>
				<?php the_excerpt() ?> <!-- the_content() -->
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
	<p>Désolé il n'y a pas d'articles pour l'instant.</p>
	<?php endif; ?>	

	<div class="paginate">
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
			<?php 
			$lists= paginate_links(['type'=>'array'])?? [];
			foreach ($lists as $list):
				echo "<li>$list</li>";
			
			endforeach;
			?>	
			</ul>
		</nav>
	</div>