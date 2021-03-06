<?php get_header(); ?>

<div class="page-content">

	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>
	
	<div class="wide-post">


	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2><hr>

			<div class="navigation">

				<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>

				<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>

			</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">

				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

				<small><?php the_time('l, F jS, Y') ?></small>

				

				<div class="entry">

					<?php the_excerpt() ?>

				</div>

		

				<small><?php the_time('F jS, Y') ?><br />Topic: <?php the_category(', ') ?> <?php if(function_exists('the_tags')) {$my_tags = get_the_tags();if ( $my_tags != "" ){ the_tags('Tags: ', ', ', '<br />'); } else {echo "Tags: None";} }?>

<?php if(function_exists('UTW_ShowTagsForCurrentPost')) { echo 'Tags: ';UTW_ShowTagsForCurrentPost("commalist");echo '<br />'; } ?></small>

				

				<!--

				<?php trackback_rdf(); ?>

				-->

			</div>

	

		<?php endwhile; ?>



<div class="navigation">

<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>

<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>

</div>

	

	<?php else : ?>



		<h2 class="center">&#8801; Det du sökte efter hittas inte. Var god försök med ett annat sökord</h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>



	<?php endif; ?>

		

	</div></div>


<?php get_footer(); ?>