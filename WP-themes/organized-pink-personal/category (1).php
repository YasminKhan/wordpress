<?php get_header(); ?>

<div class="page-content">

	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>

		
		<div class="two-columns">
		
			<h3><?php _e('Arkiv för '); ?><?php $cat_name= the_category(' '); ?></h3>
			
			<?php
			$category = get_the_category();
			$currentcat = $category[0]->cat_ID;
     		$q = 'cat=' . $currentcat;
			?>
			
			<!-- check if there are any articles in the current category and show the latest 8 posts -->	
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts($q . '&paged=' . $paged); ?>
							<?php 	
				 
				if (have_posts()) : while (have_posts()) : the_post();
			?>	
			
					<div class="column1">
						<li><a href="<?php the_permalink() ?>" rel="bookmark">
						<h2><?php the_title(); ?></h2></a></li><hr>
						<?php the_excerpt(); ?>
					</div>
				
				<?php endwhile; endif; ?>
			
			<div class="wide-post">
			
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
