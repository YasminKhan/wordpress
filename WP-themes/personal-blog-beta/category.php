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
		
			<h3 class="post-head"><?php _e('Arkiv för '); ?><?php $cat_name= the_category(' '); ?></h3>
			
			<?php
			$category = get_the_category();
			$currentcat = $category[0]->cat_ID;
     		$q = 'cat=' . $currentcat;
			?>
			
			<!-- check if there are any articles in the current category and show the latest 8 posts -->	
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts($q . '&paged=' . $paged); ?>
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
				<a href="<?php the_permalink() ?>" rel="bookmark">
				<h3-pink><?php the_title(); ?></h3-pink>
				<?php the_excerpt(); ?></a>
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
	
</div>	
	
<?php get_footer(); ?>
