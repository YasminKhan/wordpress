<?php get_header(); ?>

	<div id="main-content">	
	
		<div class="one-column">
			<?php the_post();?>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?> <br>
			<?php edit_post_link('Edit this page','','<strong>|</strong>'); ?>  	
		</div>	
	
	</div>	
	
	<aside>
		<div class="sidebar-normal">
		<?php get_sidebar('right'); ?>
		</div>
	</aside>		
	
<?php get_footer(); ?>