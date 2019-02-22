<?php get_header(); ?>
  		
<div class="page-content">

		<?php get_sidebar('topleft'); ?>
		<?php get_sidebar('top'); ?>

	<div id="lower-sidebar-area">
		<?php get_sidebar('left2'); ?>
		<?php get_sidebar('bottomleft'); ?>
	</div>

	<div id="main-content">	

		<div class="one-column">
				<h3 class="post-head-orange"><?php _e('Graviditetsdagboken'); ?></h3>	
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=12&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3><orange><?php the_title(); ?></orange></h3></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=12&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<orange><?php the_title(); ?></orange></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		
		</div>
		</div>

		<div class="clear"></div>

		<div class="one-column">
				<h3 class="post-head-orange"><?php _e('Tankar och Projekt'); ?></h3>		
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=14&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3><orange><?php the_title(); ?></orange></h3></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=14&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<orange><?php the_title(); ?></orange></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		
		<div class="clear"></div>
		
	</div>	
	
</div>

<?php get_footer(); ?>