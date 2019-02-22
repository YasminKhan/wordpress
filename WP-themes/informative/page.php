<?php get_header(); ?>

<div class="page-content">

	<div id="main-content">	
	
		<div class="one-column">
			<?php the_post();?>
			<h3-pink><?php the_title(); ?></h3-pink>
			<?php the_content(); ?> <br>
			<?php edit_post_link('Edit this page','','<strong>|</strong>'); ?>  	
		</div>	
	
	</div>	
	
	<div id="right-sidebar-area">
			
   	</div>
</div>	
	
<?php get_footer(); ?>