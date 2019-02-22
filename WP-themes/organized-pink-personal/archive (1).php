<?php get_header(); ?>

<div class="page-content">

	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>

		
		<div class="two-columns">
			
			<?php
 
				// Declare some helper vars
				$previous_year = $year = 0;
				$previous_month = $month = 0;
				$ul_open = false;
 
				// Get the posts
				$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
 
			?>
 
			<?php foreach($myposts as $post) : ?>	
 
				<?php
 
					// Setup the post variables
					setup_postdata($post);
 
					$year = mysql2date('Y', $post->post_date);
					$month = mysql2date('n', $post->post_date);
					$day = mysql2date('j', $post->post_date);
 
				?>
 
				<?php if($year != $previous_year || $month != $previous_month) : ?>
 
					<?php if($ul_open == true) : ?>
						</ul>
					<?php endif; ?>
 
					<h2><?php _e("Arkiv för "); ?><?php the_time('F Y'); ?></h2><hr>
 
					<ul class="month_archive">
 
					<?php $ul_open = true; ?>
 
				<?php endif; ?>
 
				<?php $previous_year = $year; $previous_month = $month; ?>
 
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 
				<?php endforeach; ?>
					</ul>

			
		</div>

</div>	
	
<?php get_footer(); ?>