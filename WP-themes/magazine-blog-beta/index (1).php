<?php get_header(); ?>
  		
<div class="page-content">
		
	<div id="sidebar-area">
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
	</div>

	<div id="main-content">	
				
		<div id="featured-post">
			<h3 class="post-head"><?php _e('Senaste Nytt'); ?></h3>
			<?php query_posts('cat=4,10,12&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<h2><?php the_title(); ?></h2>
				<img src="<?php echo catch_that_image() ?>" class="aligncenter" maxwidth="300px" maxheight="200px" border="0" /></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>		
		
		<div class="clear"></div>

		<div class="one-column">
			<h3 class="post-head"><?php _e('Teknik och Prylar'); ?></h3>
			<?php query_posts('cat=4&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="three-columns">
			<div class="left-column">			
			<?php query_posts('cat=4,-9&showposts=3&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="center-column">			
			<?php query_posts('cat=4,-9&showposts=3&offset=4');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">			
			<?php query_posts('cat=4,-9&showposts=3&offset=7');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>
		
		<div class="clear"></div>

		<div class="one-column">
			<h3 class="post-head"><?php _e('Livsmedelslära'); ?></h3>
			<?php query_posts('cat=10&showposts=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" border="0" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
		</div>
		<div class="three-columns">
			<div class="left-column">			
			<?php query_posts('cat=10&showposts=3&offset=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="center-column">			
			<?php query_posts('cat=10&showposts=3&offset=4');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
			<div class="right-column">			
			<?php query_posts('cat=10&showposts=3&offset=7');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<!-- <?php trackback_rdf(); ?> -->
			<?php endwhile; endif; wp_reset_query();?>	
			</div>
		</div>
		
		<div class="one-column">
			<h3 class="post-head"><?php _e('Islam'); ?></h3>
		</div>
		<div class="two-columns">
			<div class="left-column">
				<h2><?php _e('Islamiska Studier'); ?></h2>
				<?php query_posts('cat=18,19&showposts=5');
						if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>				
				<?php endwhile; endif; wp_reset_query(); ?>	
			</div>
			<div class="right-column">
				<h2><?php _e('Litteratur'); ?></h2>				
				<?php query_posts('cat=20&showposts=5');
						if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
				<?php endwhile; endif; wp_reset_query(); ?>	
			</div>
		</div>
		
		<div class="clear"></div>
		
		<div class="one-column">
			<h3 class="post-head"><?php _e('Fritt Skrivande'); ?></h3>
		</div>		
		<div class="two-columns">
			<div class="left-column">			
				<?php query_posts('cat=14&showposts=5');
						if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>				
				<?php endwhile; endif; wp_reset_query(); ?>	
			</div>
			<div class="right-column">
								
				<?php query_posts('cat=14&showposts=5&offset=5');
						if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>				
				<?php endwhile; endif; wp_reset_query(); ?>	
			</div>
		</div>

		<div class="clear"></div>
		
	</div>	
	
</div>

<?php get_footer(); ?>