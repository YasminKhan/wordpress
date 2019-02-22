<?php get_header(); ?>

	<div id="front-main-content">	
				
		<div class="front-one-column">
			<?php query_posts('showposts=2');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<img src="<?php echo catch_first_image() ?>" class="alignleft" width="45%" height="45%" minwidth="120px" border="" alt="" />
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<div class="clear"></div><hr>
			<?php endwhile; endif; wp_reset_query();?>	
		</div>

		<div class="clear"></div>

		<div class="two-columns">
			<div class="left-column">
				<?php query_posts('showposts=1&offset=2');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">
				<?php query_posts('showposts=1&offset=3');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>
		
		<div class="clear"></div><hr>
		
		<div class="front-one-column">
			<?php query_posts('showposts=1&offset=4');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<img src="<?php echo catch_first_image() ?>" class="alignleft" width="45%" height="45%" minwidth="120px" border="" alt="" />
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		
		<div class="clear"></div><hr>
				
		<div class="two-columns">
			<div class="left-column">
				<?php query_posts('showposts=1&offset=5');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">
				<?php query_posts('showposts=1&offset=6');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>

		<div class="clear"></div><hr>
		
		<div class="front-one-column">
			<?php query_posts('showposts=13&offset=7');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2></a>
				<img src="<?php echo catch_first_image() ?>" class="alignleft" width="45%" height="45%" minwidth="120px" border="" alt="" />
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<div class="clear"></div><hr>
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		
		<div class="front-one-column">
			Let your friends know that you like this site!
		</div>
		
	</div>	
	
	<aside>

	 <div id="front-sidebar">
		<div id="left-sidebar">

		<div class="one-column">
			<h3><?php _e('Latest Recipes'); ?></h3>
			<?php query_posts('cat=1&showposts=8');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<img src="<?php echo catch_first_image() ?>" class="alignleft" width="95%" height="95%" minwidth="120px" border="" alt="" />
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>

		<div class="clear"></div><hr>
		
		</div>
		
		<div id="front-right-sidebar">
			<?php get_sidebar('right'); ?>
		</div>
	</div>
	
	</aside>


<?php get_footer(); ?>