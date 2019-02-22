<?php get_header(); ?>

<div class="page-content">

	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>
	
		<div class="wide-post">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><h2><?php the_title(); ?></h2></li><hr>
				<?php the_content( 'Läs hela nyheten' ); ?> 
			
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
	
<?php get_footer(); ?>