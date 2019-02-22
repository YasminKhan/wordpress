<div id="left-sidebar">

		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
	
		<div class="one-column">
			<h3-pink><?php _e('Min Graviditet'); ?></h3-pink>
			<?php query_posts('cat=12&showposts=10');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
			<h3-pink><?php _e('Min Fråga'); ?></h3-pink>
			<?php get_poll(); ?>	
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
			<a href="http://malaysiska.se" ><img src=images/malaysiska.jpg" width="150px" border="0" /></a>
		</div>
		
		

	<?php endif; ?>

</div>