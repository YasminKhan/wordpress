<?php get_header(); ?>
  		
<div class="page-content">

		<?php get_sidebar('topleft'); ?>
		<?php get_sidebar('top'); ?>

	<div id="lower-sidebar-area">
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('bottomleft'); ?>
	</div>

	<div id="main-content">	

		<div class="one-column">
			<h3 class="post-head"><?php _e('Teknik och Prylar'); ?></h3>
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=16&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=16,15&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		<div class="three-columns">
			<div class="left-column">			
			<?php query_posts('cat=15&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="center-column">			
			<?php query_posts('cat=15&showposts=1&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">			
			<?php query_posts('cat=15&showposts=1&offset=2');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>

		<div class="one-column">
			<h3 class="post-head"><?php _e('Mat'); ?></h3>
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=10&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=10&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		</div>
		<div class="three-columns">
			<div class="left-column">			
			<?php query_posts('cat=17&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="center-column">			
			<?php query_posts('cat=17&showposts=1&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">			
			<?php query_posts('cat=17&showposts=1&offset=2');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>
		
		<div class="one-column">
			<h3 class="post-head"><?php _e('Islam'); ?></h3>
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=6&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=6&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		
		</div>
		</div>

		<div class="one-column">
			<h3 class="post-head"><?php _e('Vardag'); ?></h3>
		</div>
		<div class="two-columns">
		<div class="main-excerpt">
			<?php query_posts('cat=12&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="main-related">			
			<?php query_posts('cat=12&showposts=10&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		
		</div>
		</div>
		<div class="clear"></div>
		
	</div>	
	
</div>

<?php get_footer(); ?>