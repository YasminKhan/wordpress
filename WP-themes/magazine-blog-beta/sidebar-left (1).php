<div id="left-sidebar">

		<div class="one-column">
			<h3 class="post-head"><?php _e('Min Graviditet'); ?></h3>
			<?php query_posts('cat=12&showposts=10');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
			<h3 class="post-head"><?php _e('Min Fråga'); ?></h3>
			<?php get_poll(); ?>	
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
			<a href="http://malaysiska.se" ><img src="http://muslimskatjejer.se/wp-content/themes/magazine-content-beta/images/ad1.jpg" width="150px" border="0" /></a>
		</div>
		

</div>