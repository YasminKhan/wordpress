<?php get_header(); ?>
  		
<div class="page-content">

		<?php get_sidebar('topleft'); ?>
		<?php get_sidebar('top'); ?>

	<div id="lower-sidebar-area">
		<?php get_sidebar('left6'); ?>
		<green><?php get_sidebar('bottomleft'); ?></green>
	</div>

	<div id="main-content">	

		<div class="one-column">
				<h3 class="post-head-green"><?php _e('Litteratur'); ?></h3>	
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=20&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-green><?php the_title(); ?></h3-green></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=20&showposts=10&offset=4');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<green><?php the_title(); ?></green></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		<div class="three-columns">
			<div class="left-column">			
			<?php query_posts('cat=20&showposts=1&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="center-column">			
			<?php query_posts('cat=20&showposts=1&offset=2');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">			
			<?php query_posts('cat=20&showposts=1&offset=3');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
				<h3 class="post-head-green"><?php _e('Veckans Doua'); ?></h3>	
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=7&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3-green><?php the_title(); ?></h3-green></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=7&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<green><?php the_title(); ?></green></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		
		<div class="one-column">
				<h3 class="post-head-green"><?php _e('Aqidah'); ?></h3>	
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=18&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3-green><?php the_title(); ?></h3-green></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=18&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<green><?php the_title(); ?></green></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		
		</div>
		</div>

		<div class="one-column">
				<h3 class="post-head-green"><?php _e('Fiqh'); ?></h3>	
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=19&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3-green><?php the_title(); ?></h3-green></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=19&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<green><?php the_title(); ?></green></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		
		</div>
		</div>
		<div class="clear"></div>
		
	</div>	
	
</div>

<?php get_footer(); ?>