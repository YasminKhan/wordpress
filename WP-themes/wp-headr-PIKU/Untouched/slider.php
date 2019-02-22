<?php
// Custom Slider For WP Strap Code themes
?>

<!-- slideshow -->

    <div id="myCarousel" class="carousel slide carousel-fade">
        <div class="carousel-inner">
        <?php $firstClass = 'active'; ?> 
        <?php if (have_posts()) : ?>
          
		<?php $wpheadr_query = new WP_Query(array(
		'category_name'  => get_theme_mod( 'wpheadr_slide_cat' ),
		'posts_per_page' => get_theme_mod( 'wpheadr_slide_number' )
		)); ?>
	
    	<?php while ($wpheadr_query->have_posts()) : $wpheadr_query->the_post(); ?>
        
        <div class="item <?php echo $firstClass; ?>">
            <?php $firstClass = ""; ?>
			
            <?php the_post_thumbnail('wpheadr-page-feature'); ?>
            <?php if ( get_theme_mod( 'wpheadr_slider_caption_visibility' ) != 1 ) { ?>
			<div class="carousel-caption">
                <div class="container">
				<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<p class="lead span10"><?php echo wpheadr_slider_excerpt(); ?></p>
				<div class="slider-read-more button"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></div>
				</div>
		    </div>
			<?php } ?>
        </div>
			
      	<?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>       
        </div>    
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
    </div><!-- #myCarousel -->
