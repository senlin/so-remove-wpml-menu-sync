<?php
/*
Plugin Name: SO Remove WPML Menu Sync
Plugin URI: https://github.com/senlin/so-remove-wpml-menu-sync
Description: This free WPML Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.
Author: Piet Bos
Version: 0.2
Author URI: http://senlinonline.com
*/

/**
 * Prevent direct access to files
 * via http://mikejolley.com/2013/08/keeping-your-shit-secure-whilst-developing-for-wordpress/
 *
 * @since 0.1
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Version check; any WP version under 3.6 is not supported (if only to "force" users to stay up to date)
 * 
 * adapted from example by Thomas Scholz (@toscho) http://wordpress.stackexchange.com/a/95183/2015, Version: 2013.03.31, Licence: MIT (http://opensource.org/licenses/MIT)
 *
 * @since 0.2
 */

//Only do this when on the Plugins page.
if ( ! empty ( $GLOBALS['pagenow'] ) && 'plugins.php' === $GLOBALS['pagenow'] )
	add_action( 'admin_notices', 'so_rwms_check_admin_notices', 0 );

function so_rwms_min_wp_version() {
	global $wp_version;
	$require_wp = '3.6';
	$update_url = get_admin_url( null, 'update-core.php' );

	$errors = array();

	if ( version_compare( $wp_version, $require_wp, '<' ) ) 

		$errors[] = "You have WordPress version $wp_version installed, but <b>this plugin requires at least WordPress $require_wp</b>. Please <a href='$update_url'>update your WordPress version</a>.";

	return $errors; 
}

function so_rwms_check_admin_notices()
{
	$errors = so_rwms_min_wp_version();

	if ( empty ( $errors ) )
		return;

	// Suppress "Plugin activated" notice.
	unset( $_GET['activate'] );

	// this plugin's name
	$name = get_file_data( __FILE__, array ( 'Plugin Name' ), 'plugin' );

	printf( __( '<div class="error"><p>%1$s</p><p><i>%2$s</i> has been deactivated.</p></div>', 'so_rwms' ),
		join( '</p><p>', $errors ),
		$name[0]
	);
	deactivate_plugins( plugin_basename( __FILE__ ) );
}

/**
 *
 * @since 0.1
 */
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
		define( 'SO_PINYINSLUGS_VERSION', '0.2' );

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
