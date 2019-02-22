<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package wpheadr
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Sidan hittades inte', 'wpheadr' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Vänligen kontrollera att du är inloggad och försök igen', 'wpheadr' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>