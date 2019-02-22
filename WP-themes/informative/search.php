<?php get_header(); ?>

<div class="page-content">

<?php
$category = get_the_category(); 
$catname1 = $category[0]->cat_name;
$catID1 = $category[0]->cat_ID;
$q1 = 'cat=' . $catID1;
?>
	
		
	<div id="main-content">	
		
		<div class="one-column">

			<?php if (have_posts()) : ?>
			<h3-pink>Din sökning gav följande resultat:</h3-pink>
			<?php while (have_posts()) : the_post(); ?>

			<div class="post">

				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

				<small><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">

					<?php the_excerpt() ?>

				</div>

				<small><?php _e('Topic: '); ?><?php the_category(', ') ?> <?php if(function_exists('the_tags')) {$my_tags = get_the_tags();if ( $my_tags != "" ){ the_tags('Tags: ', ', ', '<br />'); } else {echo "Tags: None";} }?>

				<?php if(function_exists('UTW_ShowTagsForCurrentPost')) { echo 'Tags: ';UTW_ShowTagsForCurrentPost("commalist");echo '<br />'; } ?></small>

				<!-- <?php trackback_rdf(); ?> -->

			</div>

		<?php endwhile; ?>

		<div class="navigation">
				<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
				<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>

<p><h3-pink>Hittade du inte det du sökte efter? Prova med ett annat sökord eller kontakta mig! Kanske har jag inte skrivit om det du letar efter ännu?</h3-pink></p>

	<?php else : ?>

		<h2 class="center">&#8801; Det du sökte efter hittas inte. Var god försök med ett annat sökord</h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div></div>

<div id="right-sidebar-area">
			<div class="cat-column">
				<h2><?php _e('Fler artiklar i '); ?><?php $cat_name= the_category(' '); ?></h2>
				<?php query_posts($q1 . '&posts_per_page=15');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			</div>


   </div>
</div>


<?php get_footer(); ?>