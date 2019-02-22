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

 
<div id="my-custom-login">
	<h2><?php _e( 'Logga in', 'buddypress' ) ?></h2>
	<?php wp_login_form(); ?>
	<a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Lost Password">Glömt Lösenordet?</a>
</div>