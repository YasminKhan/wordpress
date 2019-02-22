<?php get_header(); ?>

	<div id="main-content">	
	
		<div class="one-column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<p><small><?php the_time('l, F jS, Y') ?></small></p>
			<?php the_content(); ?> <br>
			<p class="postmetadata">
				<?php previous_post_link('%link', '<< Older Posts', TRUE); ?> |Posted in <?php the_category(', ') ?> 
				<strong>|</strong><?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
				<?php comments_popup_link('No Comments |', '1 Comment |', '% Comments |'); ?>
				<?php next_post_link('%link', 'Newer Posts >>', TRUE); ?>
			</p>
			<!-- <?php trackback_rdf(); ?> -->
			
			<?php endwhile; endif;?>
			
			<?php comments_template(); ?>
		</div>	
	
	</div>
	
	<aside>
		<div class="sidebar-normal">
		<?php get_sidebar('right'); ?>
		</div>
	</aside>		
	
<?php get_footer(); ?>