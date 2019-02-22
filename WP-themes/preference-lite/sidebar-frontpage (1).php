<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar for the front page
 *
 * @file           sidebar-frontpage.php
 * @package        Preference Lite 
 * @author         Andre Jutras 
 * @copyright      2013 StyledThemes.com
 * @license        license.txt
 * @version        Release: 1.0
 * @since          available since Release 1.0
 */
 
if (   ! is_active_sidebar( 'sidebar-bottom1'  )
	&& ! is_active_sidebar( 'sidebar-bottom2' )
	&& ! is_active_sidebar( 'sidebar-bottom3'  )
	&& ! is_active_sidebar( 'sidebar-bottom4'  )		
		
	)

		return;
	// If we get this far, we have widgets. Let do this.
?>

	<div class="row">
		<aside id="bottom-wrapper">
			<div id="my-custom-login">
				<h2><?php _e( 'Logga in', 'buddypress' ) ?></h2>
				<?php wp_login_form(); ?>
				<a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Lost Password">Lost Your Password?</a>
			</div>
		</aside>			
	</div>