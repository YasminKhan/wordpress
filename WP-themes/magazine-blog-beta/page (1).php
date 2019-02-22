<?php get_header(); ?>

<div class="page-content">

	<div id="sidebar-area">
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('right'); ?>
   </div>

	<div id="main-content">	
	
		<div class="one-column">
			<?php the_post();?>
			<h3 class="post-head"><?php the_title(); ?></h3>
			<?php the_content(); ?> <br>
			<?php edit_post_link('Edit this page','','<strong>|</strong>'); ?>  	
		</div>	
	
	</div>	
	
</div>	
	
<?php get_footer(); ?>