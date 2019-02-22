<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar with login box template for the front page
 *
 * @file           sidebar-pageright.php
 * @package        Preference Child
 * @author         Yasmin Shamsudin, credits to Patrick Cohen at wpmu.org
 * @copyright      2013 YasminShamsudin.com
 * @license        license.txt
 * @version        Release: 1.0
 * @since          available since Release 1.0
 */
?>

 
<div id="my-custom-login">
	<?php dynamic_sidebar( 'sidebar-front' ); ?>
</div>