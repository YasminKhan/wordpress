<?php get_header(); ?>

<div class="page-content">

		<?php get_sidebar('topleft'); ?>
		<?php get_sidebar('top'); ?>

	<div id="lower-sidebar-area">
		<?php get_sidebar('left'); ?>
		<?php get_sidebar('bottomleft'); ?>
	</div>
	
	<div id="main-content">	
	
		<div class="one-column">

		<h3 class="post-head">&#8801; Error 404 &ndash; File not Found</h3>

		Sidan du söker finns inte. V g använd sökfältet ovan eller välj en kategori nedan.

		<li><h3-pink>&#8801; Ämnen</h3-pink>
				<ul>
				<?php wp_list_cats('sort_column=name&hide_empty=0&optioncount=0&hierarchical=1'); ?>
				</ul>
	   </li>

		<li><h3-pink>&#8801; Senaste inlägg</h3-pink>
				<ul>
				<?php get_archives('postbypost','10','html'); ?>  
				</ul>
		</li>

		</div>

	</div>

</div>

<?php get_footer(); ?>