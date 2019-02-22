<?php get_header(); ?>
  		
<div class="page-content">

	<div id="column">	
			
			<h2>Grunderna (Fardhu 'Ain)</h2>
			<p><h3>Aqidah</h3></p>
			<?php query_posts('cat=4&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			
			<p><h3>Fiqh</h3></p>
			<?php query_posts('cat=5&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			
			<p><h3>Ihsan</h3></p>
			<?php query_posts('cat=6&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>		
		
		<div class="clear"></div>
		
	</div>	
	
		<div id="column">	
			
			<h2>Avancerat <br>(Fardh al-Kifayah)</h2>
			<p><h3>Science of Quran</h3></p>
			<?php query_posts('cat=7&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			
			<p><h3>Science of Hadith</h3></p>
			<?php query_posts('cat=8&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			
			<p><h3>Science of Fiqh</h3></p>
			<?php query_posts('cat=9&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>
			
			<p><h3>Islamic History</h3></p>
			<?php query_posts('cat=10,11,12,13,14,15&posts_per_page=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>">				
				<?php the_title(); ?></a></li>
			<?php endwhile; endif; wp_reset_query();?>	
		
		<div class="clear"></div>
		
	</div>
	
	<?php get_sidebar(); ?>
	
</div>



<?php get_footer(); ?>