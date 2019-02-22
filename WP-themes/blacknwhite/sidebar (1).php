<div id="sidebar">

	<div class="clear"></div>
	
	<?php get_search_form(); ?>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
		<h3>Senaste Inlägg</h3>
			<?php query_posts('posts_per_page=5');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			
	<?php endif; ?>
	
</div>