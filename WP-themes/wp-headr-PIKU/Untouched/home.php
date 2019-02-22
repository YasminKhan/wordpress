<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package wpheadr
 */

get_header(); ?>
<div class="container">
<div class="row" role="main">
	<div class="span8">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            <?php if ( is_front_page() ) : ?>
			<?php get_template_part( 'content', 'home' ); ?>
			<?php else : ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
            <?php endif; ?>
			<?php endwhile; ?>
			
			<?php wpheadr_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

	</div><!-- #content -->
	
		<div class="span4">
            <?php get_sidebar(); ?>
        </div>
</div>
</div>
<?php get_footer(); ?>