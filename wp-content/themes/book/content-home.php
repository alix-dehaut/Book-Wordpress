<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<div class="col-md-4 post-home <?php echo ('event' == get_post_type())? 'event' : '' ?>">

	<?php if (has_post_thumbnail()): ?>
		<a href="<?php the_permalink(); ?>">
		    <?php the_post_thumbnail('thumbnail', ['class' => 'img-responsive',]); ?>
		</a>
	<?php endif; ?>
		<h2><?php the_title(); ?></h2>
	
		<small><?php the_time('F JS, Y'); ?></small>
	
		<div class='entry'>
			<?php the_excerpt() ?> <!-- the_content() -->
		</div>
	
		<p>Auteur: <?php the_author_posts_link(); ?> </p>
	
		<p class="postmetadata">Publier dans: <?php the_category(','); ?></p>
	
		<?php the_tags('Tags: ',',','<br/>'); ?>
	</div>

		<?php endwhile; else: ?>
		<p>Désolé il n'y a pas d'articles pour l'instant.</p>
		<?php endif; ?>