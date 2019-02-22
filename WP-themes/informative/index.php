<?php get_header(); ?>

<div class="page-content">	

	<div id="main-content">	
				
		<div id="featured-post">
			<h2><?php _e('Senaste recepten'); ?></h2>
			<?php query_posts('tag=recept&showposts=4');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="front-box">
				<a href="<?php the_permalink() ?>">	
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="140px" height="100px" border="1px" /></a>			
				<h3><?php the_title(); ?></h3>
				<!-- <?php trackback_rdf(); ?> -->
				<div class="clear"></div>
				</div>	
			<?php endwhile; endif; wp_reset_query();?>	
		</div>		
		
		<div class="clear"></div>

		<h3-pink><?php _e('Nyheter'); ?></h3-pink></a>
		
		<div class="front-one-column">
			<?php query_posts('showposts=4&cat=-42,-24,-25,-26,-27,-28');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" height="120px" border="1px" alt="" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<div class="clear"></div>
			<?php endwhile; endif; wp_reset_query();?>	
		</div>

		<div class="clear"></div>
		
	</div>	


<div id="right-sidebar-area">
		<?php get_sidebar('right'); ?>
	</div>
</div>



<?php get_footer(); ?>