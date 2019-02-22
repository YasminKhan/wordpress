<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar template for pages with a right column
 *
 * @file           sidebar-pageright.php
 * @package        Preference Lite 
 * @author         Andre Jutras 
 * @copyright      2013 StyledThemes.com
 * @license        license.txt
 * @version        Release: 1.0
 * @since          available since Release 1.0
 */
?>

<aside id="right-column" class="span2">
	<?php if ( is_active_sidebar( 'sidebar-leftblog' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">	
			<?php dynamic_sidebar( 'sidebar-leftblog' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
</aside>