<?php get_header(); ?>

<div id="archives-page">

	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>

		
		<div class="archive-teaser">
		
			<h3><?php _e('Arkiv för '); ?><?php the_category(' '); ?></h3>
			
			<div class="column2">
			<!-- check if there are any articles in the "news"-category, if there exists, find the latest one -->				<?php 		
				query_posts('cat=1&showposts=4'); 
				if (have_posts()) : while (have_posts()) : the_post();
			?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<h2><?php the_title(); ?></h2></a></li><hr>
			
			<!-- display an excerpt of the post -->
			<?php the_excerpt( 'Läs hela nyheten' ); ?> 
			<?php endwhile; endif; wp_reset_query();?>
			</div>
			
			
			<div class="column3">
			<!-- check if there are any articles in the "news"-category, if there exists, find the latest one -->				<?php query_posts('cat=1&showposts=4&offset=4'); ?><?php while(have_posts()) : the_post();?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<h2><?php the_title(); ?></h2></a></li><hr>
			
			<!-- display an excerpt of the post -->
			<?php the_excerpt( 'Läs hela nyheten' ); ?> 
			<?php endwhile; wp_reset_query();?>
			</div>
		
			
		</div>

</div>	
	
<?php get_footer(); ?>