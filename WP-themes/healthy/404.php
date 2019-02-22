<?php get_header(); ?>
	
	<div id="main-content">	
	
		<div class="one-column">
		<h2>Error 404 &ndash; File not Found</h2>
		The site you are looking for is not available. It might have moved or ceased to exist. 
		Please try searching for the requested content by using the above searchbar.
		If you are certain that the article exists at this site but can not find it you are welcome to contact the site administrator.
		<li><h2>&#8801; Available Topics</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&hide_empty=0&optioncount=0&hierarchical=1'); ?>
				</ul>
	   </li>
		<li><h2>&#8801; Lastest Posts</h2>
				<ul>
				<?php get_archives('postbypost','10','html'); ?>  
				</ul>
		</li>
		</div>
	</div>	<aside>
		<div class="sidebar-normal">
		<?php get_sidebar('right'); ?>
		</div>
	</aside>
<?php get_footer(); ?>