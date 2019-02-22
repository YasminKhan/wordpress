<?php get_header(); ?>

<div class="page-content">

	<div id="sidebar-area">
	<?php get_sidebar('yasminleft'); ?>
	<?php get_sidebar('yasminright'); ?>
        </div>
		
	<div id="main-content">	

		<div class="wide-post">
		
			<h2><?php _e('Yasmins Värld'); ?></h2>
			
			<?php
			$category = get_the_category();
			$currentcat = $category[0]->cat_ID;
     		$q = 'cat=' . $currentcat;
			?>
			
			<!-- check if there are any articles in the current category and show the latest post -->	
			<?php query_posts($q . '&showposts=1'); ?>
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
				<li><a href="<?php the_permalink() ?>" rel="bookmark">
				<h2><?php the_title(); ?></h2></a></li><hr>
				<?php the_excerpt(); ?>
			<?php endwhile; endif; ?>
			<!-- <?php trackback_rdf(); ?> -->
			<?php	wp_reset_query();?>
			
			<div id="advert-space"><h2 class="post-head"><?php _e('Tidigare inlägg av Mig'); ?></h2></div>
			<!-- check if there are any articles in the current category and show the latest 8 posts -->	
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts($q . '&offset=1&paged=' . $paged); ?>
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
				<li><a href="<?php the_permalink() ?>" rel="bookmark">
				<h2><?php the_title(); ?></h2></a></li><hr>
			<?php endwhile; endif; ?>
			<!-- <?php trackback_rdf(); ?> -->
			<?php	wp_reset_query();?>
			
		</div>
			
				
			
	</div>
	
</div>	
	
<?php get_footer(); ?>
