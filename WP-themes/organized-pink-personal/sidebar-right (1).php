<div id="right-sidebar">

<div class="sidebar">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
	
		<h2><?php _e('Arkiv'); ?></h2>
		<?php wp_get_archives('type=postbypost&limit=15'); ?>
			
	<?php endif; ?>

</div>

</div>