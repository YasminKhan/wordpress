<?php get_header(); ?>

<div class="page-content">

	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>
	
		<div class="wide-post">
			
			<?php the_post();?>
			
			<li><h2><?php the_title(); ?></h2></li><hr>
			<?php the_content(); ?> 
			<?php edit_post_link('Edit this page','','<strong>|</strong>'); ?>  
				
		</div>	
	
</div>	
	
<?php get_footer(); ?>