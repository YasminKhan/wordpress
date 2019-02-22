<?php get_header(); ?>

<div class="page-content">

	<?php $category = get_the_category(); $currentcat = $category[0]->cat_ID; $q = 'cat=' . $currentcat; ?>
	
	<div id="main-content">	
	
		<div class="one-column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3-pink><?php the_title(); ?></h3-pink>
			<p><small><?php _e('Publicerad: '); ?><?php the_time('l, F jS, Y') ?></small></p>
			<main-text><?php the_content(); ?></main-text> <br>
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
	
	<div id="right-sidebar-area">
			<div class="cat-column">
				<h2><?php _e('Fler artiklar i '); ?><?php echo get_category_parents($currentcat, TRUE, ' &raquo; '); ?></h2>
				<?php query_posts($q . '&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			</div>
   	</div>

</div>	
	
<?php get_footer(); ?>