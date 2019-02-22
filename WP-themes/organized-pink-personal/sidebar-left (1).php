<div id="left-sidebar">

<div class="sidebar">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
		<?php wp_list_pages('title_li=<h2>Om Mig</h2>'); ?>
		
		<h2><?php _e('Senaste Bloginläggen'); ?></h2>
			<?php query_posts('cat=-1&showposts=10'); ?><?php while(have_posts()) : the_post();?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_query();?>
			
		<h2><?php _e('Projekt'); ?></h2>
			<?php query_posts('category_name=project&showposts=10'); ?><?php while(have_posts()) : the_post();?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<?php the_title(); ?></a></li> 
			<?php endwhile; wp_reset_query();?>
			
	<?php endif; ?>

</div>

</div>