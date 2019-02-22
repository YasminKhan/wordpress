<?php get_header(); ?>

	<div id="main-content">	

			<?php
			/* Queue the first post, that way we know what date we're dealing with (if that is the case).
	 		* We reset this later so we can run the loop properly with a call to rewind_posts().
	 		*/
			if ( have_posts() )
				the_post();
			?>	
			<h2>
				<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'photolistic' ), get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'photolistic' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'photolistic' ) ) ); ?>
				<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'photolistic' ), get_the_date( _x( 'Y', 'yearly archives date format', 'photolistic' ) ) ); ?>
				<?php else : ?>
				<?php _e( 'Archives', 'photolistic' ); ?>
				<?php endif; ?>
			</h2>
			<?php
				rewind_posts();
	
			// Declare some helper vars
				$previous_year = $year = 0;
				$previous_month = $month = 0;
				$ul_open = false;
 
				// Get the posts
				$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
			?>

			<div class="one-column">
				<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink() ?>">				
					<h3><?php the_title(); ?></h3></a>
					<?php the_excerpt(); ?>
				<?php endwhile; wp_reset_query();?>	
			</div>
	</div>
	
	
	<aside>
		<div class="sidebar-normal">
		<?php get_sidebar('right'); ?>
		</div>
	</aside>			
	
<?php get_footer(); ?>