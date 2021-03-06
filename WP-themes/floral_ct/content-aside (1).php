<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Bouquet
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="aside">
        <header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php bouquet_posted_on(); ?>

	</header><!-- .entry-header -->

<div class="entry-content">
<?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail();
    } 
    ?>		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bouquet' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</div>
	<footer class="entry-meta">
		<?php bouquet_post_meta(); ?>
		<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'bouquet' ), __( '1 Comment', 'bouquet' ), __( '% Comments', 'bouquet' ) ); ?></span>
		<?php endif; ?>
		<?php edit_post_link( __( '(Edit)', 'bouquet' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->