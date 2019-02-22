<div id="right-sidebar">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
		<h3><?php _e('Archives'); ?></h3>
		<?php wp_get_archives('type=postbypost&limit=15'); ?>
			
	<?php endif; ?>

</div>