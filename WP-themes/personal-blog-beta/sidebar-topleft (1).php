<div id="topleft-sidebar">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
		<h2><?php _e('My Profile'); ?></h2>
		<?php wp_get_archives('type=postbypost&limit=15'); ?>
			
	<?php endif; ?>

</div>