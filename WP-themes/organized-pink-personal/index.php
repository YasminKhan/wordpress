<?php get_header(); ?>
  		
<div class="page-content">
		
		<div class="four-column-row">
		
			<div class="column1">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->
				<?php query_posts('cat=-1&showposts=1');
						if (have_posts()) : while (have_posts()) : the_post();
				?><li><a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a></li><hr><br />
				
				<!-- display an excerpt of the post -->
				<?php the_excerpt( 'Läs hela nyheten' ); ?>
							
				<?php
						endwhile; endif;
						wp_reset_query();
				?>
			</div>
			
			<div class="column2">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->				<?php query_posts('cat=-1&showposts=1&offset=1');
						if (have_posts()) : while (have_posts()) : the_post();
				?><li><a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a></li><hr><br />
				
				<!-- display an excerpt of the post -->
				<?php the_excerpt( 'Läs hela nyheten' ); ?>
							
				<?php
						endwhile; endif;
						wp_reset_query();
				?>

		</div>
	
	
		<div class="column3">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->	
				<?php query_posts('cat=-1&showposts=1&offset=2');
						if (have_posts()) : while (have_posts()) : the_post();
				?><li><a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a></li><hr><br />
				
				<!-- display an excerpt of the post -->
				<?php the_excerpt( 'Läs hela nyheten' ); ?>
							
				<?php
						endwhile; endif;
						wp_reset_query();
				?>

		</div>
	
		<div class="column4">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->				<?php query_posts('cat=-1&showposts=1&offset=3');
						if (have_posts()) : while (have_posts()) : the_post();
				?><li><a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a></li><hr><br />
				
				<!-- display an excerpt of the post -->
				<?php the_excerpt( 'Läs hela nyheten' ); ?>
							
				<?php
						endwhile; endif;
						wp_reset_query();
				?>
		</div>

		</div>
		
		<div class="clear"></div>
	
		<div class="four-column-row">
		
						<div class="column1">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->				<?php query_posts('category_name=project&showposts=1'); ?><?php while(have_posts()) : the_post();?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<h2><?php the_title(); ?></h2></a></li><hr>
			
			<!-- display an excerpt of the post -->
			<?php the_excerpt( 'Läs hela nyheten' ); ?> 
			<?php endwhile; wp_reset_query();?>
		</div>
	
		<div class="column2">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->				<?php query_posts('category_name=project&showposts=1&offset=1'); ?><?php while(have_posts()) : the_post();?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<h2><?php the_title(); ?></h2></a></li><hr>
			
			<!-- display an excerpt of the post -->
			<?php the_excerpt( 'Läs hela nyheten' ); ?> 
			<?php endwhile; wp_reset_query();?>

		</div>
	
		<div class="column3">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->				<?php query_posts('category_name=project&showposts=1&offset=2'); ?><?php while(have_posts()) : the_post();?>
			
			<!-- display the post headline and link it to the full post -->
			<li><a href="<?php the_permalink() ?>" rel="bookmark">
					<h2><?php the_title(); ?></h2></a></li><hr>
			
			<!-- display an excerpt of the post -->
			<?php the_excerpt( 'Läs hela nyheten' ); ?> 
			<?php endwhile; wp_reset_query();?>

		</div>
	
		<div class="column4">
			<!-- check if there are any articles in the "project"-category, if there exists, find the latest one -->				<?php query_posts('category_name=project&showposts=1&offset=3');
						if (have_posts()) : while (have_posts()) : the_post();
				?><li><a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a></li><hr><br />
				
				<!-- display an excerpt of the post -->
				<?php the_excerpt( 'Läs hela nyheten' ); ?>
							
				<?php
						endwhile; endif;
						wp_reset_query();
				?>
		</div>
		
		</div>
		
</div>

<?php get_footer(); ?>