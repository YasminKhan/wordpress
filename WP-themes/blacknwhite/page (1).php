<?php get_header(); ?>

<div class="page-content">

	<div id="main-content">	
	
			<?php the_post();?>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?> <br>
			<?php edit_post_link('Edit this page','','<strong>|</strong>'); ?>  	
	
	</div>	
	
	<?php get_sidebar(); ?>
   
</div>	
	
<?php get_footer(); ?>