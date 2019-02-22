<?php get_header(); ?>
  		
<div class="page-content">

		<?php get_sidebar('topleft'); ?>
		<?php get_sidebar('top'); ?>

	<div id="lower-sidebar-area">
		<?php get_sidebar('left1'); ?>
		<?php get_sidebar('bottomleft'); ?>
	</div>

	<div id="main-content">	

		<div class="one-column">
				<h3 class="post-head-purple"><?php _e('Livsmedelslära'); ?></h3>	
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=10&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3><purple><?php the_title(); ?></purple></h3></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=10&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<purple><?php the_title(); ?></purple></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		
		</div>
		</div>

		<div class="clear"></div>

		<div class="one-column">
				<h3 class="post-head-purple"><?php _e('Kokboken'); ?></h3>		
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
		
			<div class="two-columns-main">
			<div class="column1">
			<?php query_posts('cat=17&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3><purple><?php the_title(); ?></purple></h3>				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" /></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			
			<div class="column2">
			<?php query_posts('cat=17&showposts=1&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3><purple><?php the_title(); ?></purple></h3>				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" /></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			</div>	
		
			<div class="two-columns-main">
			<div class="column1">
			<?php query_posts('cat=17&showposts=1&offset=2');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3><purple><?php the_title(); ?></purple></h3>				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" /></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			
			<div class="column2">
			<?php query_posts('cat=17&showposts=1&offset=3');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3><purple><?php the_title(); ?></purple></h3>				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" /></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			</div>
			
		</div>
		
		<div class="main-related">			
			<?php query_posts('cat=17&showposts=25&offset=4');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<purple><?php the_title(); ?></purple></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
				<h3 class="post-head-purple"><?php _e('Halalguiden'); ?></h3>		
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=22&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3><purple><?php the_title(); ?></purple></h3></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=22&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<purple><?php the_title(); ?></purple></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		
		<div class="clear"></div>
		
	</div>	
	
</div>

<?php get_footer(); ?>