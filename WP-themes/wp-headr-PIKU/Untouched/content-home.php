<?php
/**
 * @package wpheadr
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="summary-thumbnail">
		<a href="<?php the_permalink(); ?>">
		   <?php the_post_thumbnail( 'wpheadr-post-feature' ); ?>
		</a>	
	</div>
	
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'wpheadr' ),
				'after'  => '</div>',
			) );
		?>
		<div class="read-more button">
		   <a href="<?php the_permalink(); ?>">Read The Full Article &raquo;</a>
		</div>
		
	</div><!-- .entry-summary -->
	<div class="clearfix"></div>    
				
</article><!-- #post-## -->