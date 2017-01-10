<?php get_header(); ?>

		<div class="row">
			<div class="col-sm-8">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		  			<article class="blog-post">
						<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="blog-post-meta"><?php echo __('On the', 'arnouv-theme').' ';  the_date(); echo ' '.__('by', 'arnouv-theme').' '; the_author_posts_link(); ?></p>

						<?php the_content((__('Read more', 'arnouv-theme').' &rarr;')); ?>
					</article>
					
			  	<?php endwhile; else: ?>
				<?php endif; ?>

				<?php if (show_posts_nav()) : ?>
					<div class="pages-links">
						<?php posts_nav_link(' &ndash; ','&larr; '.__('Newer articles', 'arnouv-theme'),__('Older articles', 'arnouv-theme').' &rarr;'); ?>
					</div>
				<?php endif; ?>

			</div>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>