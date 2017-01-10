<?php get_header(); ?>

		<div class="row">
			<div class="col-sm-8">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		  			<article class="blog-post">
						<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
					</article>

			  	<?php endwhile; else: ?>
				<?php endif; ?> 

			</div>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>