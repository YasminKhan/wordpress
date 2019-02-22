<footer>
				
			<div>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
				<h2><?php _e('About This Site'); ?></h2>
				<?php wp_get_archives('type=postbypost&limit=5'); ?>
			<?php endif; ?>
			</div>
			<div>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
				<h2><?php _e('About Me'); ?></h2>
				<?php wp_get_archives('type=postbypost&limit=5'); ?>	
				<?php endif; ?>
			</div>
			<div>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
				<h2><?php _e('Contact Me'); ?></h2>
				<?php wp_get_archives('type=postbypost&limit=5'); ?>	
				<?php endif; ?>
			</div>
			<div>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?>
				<h2><?php _e('What do You Think?'); ?></h2>
				<?php wp_get_archives('type=postbypost&limit=5'); ?>	
				<?php endif; ?>
			</div>

</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</div></body></html>