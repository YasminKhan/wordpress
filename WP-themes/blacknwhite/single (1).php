<?php get_header(); ?>
  		
<div class="page-content">

<?php
$category = get_the_category(); 
$catname1 = $category[0]->cat_name;
$catname2 = $category[1]->cat_name;
$catname3 = $category[2]->cat_name;
$allcatnames = $category[20]->cat_name;
$catID1 = $category[0]->cat_ID;
$catID2 = $category[1]->cat_ID;
$catID3 = $category[2]->cat_ID;
$allcat = $category[20]->cat_ID;
$catslug = $category[0]->slug;
$q = 'cat=' . $allcat;
$q1 = 'cat=' . $catID1;
$qslug = 'cat=' . $catslug;
?>

	<div id="main-content">	
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<p><small><?php _e('Publicerad: '); ?><?php the_time('l, F jS, Y') ?></small></p>
			<?php the_content(); ?><br>
			<p class="postmetadata">
				<?php previous_post_link('%link', '<< Föregående', TRUE); ?> |Posted in <?php the_category(', ') ?> 
				<strong>|</strong><?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
				<?php comments_popup_link('No Comments |', '1 Comment |', '% Comments |'); ?>
				<?php next_post_link('%link', 'Nästa >>', TRUE); ?>
			</p>
			<!-- <?php trackback_rdf(); ?> -->
			
			<?php endwhile; endif;?>
			
			<?php comments_template(); ?>
			
			<div class="clear"></div>
		
	</div>	
	
	<div id="sidebar">
	
	<?php get_search_form(); ?>
	
			<div class="cat-column">
				<h2><?php _e('Fler artiklar i '); ?><?php $cat_name= the_category(' '); ?></h2>
				<?php query_posts($q1 . '&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			</div>
   </div>
	
</div>

<?php get_footer(); ?>