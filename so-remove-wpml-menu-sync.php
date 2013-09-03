<?php
/*
Plugin Name: SO Remove WPML Menu Sync
Plugin URI: https://github.com/senlin/so-remove-wpml-menu-sync
Description: This free WPML Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.
Author: Piet Bos
Version: 0.1
Author URI: http://senlinonline.com
*/

/**
 * Prevent direct access to files
 * via http://mikejolley.com/2013/08/keeping-your-shit-secure-whilst-developing-for-wordpress/
 *
 * @since 0.1
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class SOrwms_Load {
	
	function __construct() {

		global $so_rwms;

		/* Set up an empty class for the global $so_pinyinslugs object. */
		$so_rwms = new stdClass;

		/* Set the constants needed by the plugin. */
		add_action( 'admin_init', array( &$this, 'constants' ), 1 );

		/* Internationalize the text strings used. */
		add_action( 'admin_init', array( &$this, 'i18n' ), 2 );

	}
	
	/**
	 * Defines constants used by the plugin.
	 *
	 * @since 0.1
	 */
	function constants() {

		/* Set the version number of the plugin. */
		define( 'SO_PINYINSLUGS_VERSION', '0.1' );

	}

	/**
	 * Loads the translation file.
	 *
	 * @since 0.1
	 */
	function i18n() {

		/* Load the translation of the plugin. */
		load_plugin_textdomain( 'so-rwms', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}

}

$so_rwms_load = new SOrwms_Load();

/**
 * This function checks whether WPML is active (WPML needs to be active for this to have any use)
 * and gives a warning message with link to WPML if it is not active.
 *
 * modified using http://wpengineer.com/1657/check-if-required-plugin-is-active/ and the _no_wpml_warning function
 *
 * @since 0.1
 */

$plugins = get_option( 'active_plugins' );

$required_plugin = 'sitepress-multilingual-cms/sitepress.php';

if ( ! in_array( $required_plugin , $plugins ) ) {

	add_action( 'admin_notices', 'so_no_wpml_warning' );

}

function so_no_wpml_warning() {
    
    echo '<div class="message error"><p>';
    
    printf( __( 'The <strong>SO Remove WPML Menu Sync plugin</strong> only works if you have the <a href="%s">WPML</a> plugin installed.', 'so-rwms' ), 
        'http://wpml.org/' );
    
    echo '</p></div>';
}

/**
 * This function hides the WPML nav menu synchronisation link in backend
 *
 * @since 0.1
 */
function so_hide_wpml_sync_link() {

	?>

	<style>
		/* hide WPML nav menu synchronisation link in backend */
		.howto.icl_nav_menu_text > div > a {
		    display: none;
		}
		
	</style>

<?php }

add_action( 'admin_head-nav-menus.php', 'so_hide_wpml_sync_link' );

/**
 * The link to the WPML Menus Sync submenu depends on whether the WPML Translation Management Addon has been installed,
 * therefore this function first checks on that and then removes the WPML Menus Sync submenu
 *
 * modified using http://wp.tutsplus.com/tutorials/creative-coding/customizing-your-wordpress-admin/
 *
 * @since 0.1
 */
function so_remove_wpml_menu_sync() {  
    global $submenu;  

	if ( is_plugin_active( 'wpml-translation-management/plugin.php' ) ) {
		
		remove_submenu_page( 'wpml-translation-management/menu/main.php', 'sitepress-multilingual-cms/menu/menus-sync.php' );
		
	} else {
		
		remove_submenu_page('sitepress-multilingual-cms/menu/languages.php','sitepress-multilingual-cms/menu/menus-sync.php');
		
	}

}

add_action( 'admin_menu', 'so_remove_wpml_menu_sync', 999 );
