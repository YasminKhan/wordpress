<?php get_header(); ?>

<div class="page-content">
		
	<div id="main-content">	

		<div class="one-column">
			<!-- check if there are any articles in the current category and show the latest n posts (depends on settings in admin panel)-->	
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts('cat=31&paged=' . $paged); ?>
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
				<a href="<?php the_permalink() ?>">				
				<img src="<?php echo catch_that_image() ?>" class="alignleft" width="150px" height="120px" border="1px" alt="" />
				<h3-pink><?php the_title(); ?></h3-pink></a>
				<?php the_excerpt(); ?>
				<!-- <?php trackback_rdf(); ?> -->
				<div class="clear"></div>
			<?php endwhile; endif; ?>
			
			<p class="postmetadata">
				<?php previous_posts_link('<< Föregående'); ?> 
					<strong>|</strong><?php edit_post_link('Edit','','<strong>|</strong>'); ?>
				<?php next_posts_link('Nästa >>'); ?>
			</p>

		</div>
			
				<!-- <?php trackback_rdf(); ?> -->
			
			<?php	wp_reset_query();?>
			
	</div>
	
	<div id="right-sidebar-area">
			<div class="cat-column">
				<?php query_posts('cat=36&posts_per_page=-1'); ?>
				<h2><?php _e('Några artiklar från '); ?><?php wp_list_categories('include=36&title_li='); ?></h2>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			</div>
			<div class="cat-column">
				<?php query_posts('cat=12&posts_per_page=5'); ?>
				<h2><?php _e('Några artiklar från '); ?><?php wp_list_categories('include=12&title_li='); ?></h2>			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			</div>

   	</div>

</div>	
	
<?php get_footer(); ?>
