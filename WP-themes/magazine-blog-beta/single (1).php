<?php get_header(); ?>

<div class="page-content">

	<div id="sidebar-area">
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
   </div>
	
	<div id="main-content">	
	
		<div class="one-column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3 class="post-head"><?php the_title(); ?></h3>
			<p><small><?php the_time('l, F jS, Y') ?></small></p>
			<?php the_content(); ?> <br>
			<p class="postmetadata">
				<?php previous_post_link('%link', '<< Föregående', TRUE); ?> |Posted in <?php the_category(', ') ?> 
				<strong>|</strong><?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
				<?php comments_popup_link('No Comments |', '1 Comment |', '% Comments |'); ?>
				<?php next_post_link('%link', 'Nästa >>', TRUE); ?>
			</p>
			<!-- <?php trackback_rdf(); ?> -->
			
			<?php endwhile; endif;?>
			
			<?php comments_template(); ?>
		</div>	
	
	</div>	
	
</div>	
	
<?php get_footer(); ?>