<?php
/*
Plugin Name: SO Remove WPML Menu Sync
Plugin URI: https://so-wp.com/?p=18
Description: This free WPML Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.
Author: SO WP
Version: 1.1.2
Author URI: https://so-wp.com/plugin/
Text Domain: so-remove-wpml-menu-sync
Domain Path: /languages
*/

/**
 * Prevent direct access to files
 *
 * @since 0.1
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *
 * @since 0.1
 */
class SOrwms_Load {
	
	function __construct() {

		global $so_rwms;

		/* Set up an empty class for the global $so_pinyinslugs object. */
		$so_rwms = new stdClass;

		/* Internationalize the text strings used. */
		add_action( 'admin_init', array( &$this, 'i18n' ), 2 );

	}
	
	/**
	 * Loads the translation file.
	 *
	 * @since 0.1
	 */
	function i18n() {

		/* Load the translation of the plugin. */
		load_plugin_textdomain( 'so-remove-wpml-menu-sync', false, basename( dirname( __FILE__ ) ) . '/languages/' );
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

// multisite throws the error message by default, because the plugin is installed on the network site, therefore check for multisite @since 0.2.2
if ( ! in_array( $required_plugin , $plugins ) && ! is_multisite() ) {

	add_action( 'admin_notices', 'so_no_wpml_warning' );

}

function so_no_wpml_warning() {
    
    // display the warning message
    echo '<div class="message error"><p>';
    
    printf( __( 'The <strong>SO Remove WPML Menu Sync plugin</strong> only works if you have the <a href="%s">WPML</a> plugin installed.', 'so-remove-wpml-menu-sync' ), 
        'https://wpml.org' );
    
    echo '</p></div>';
    
    // and deactivate the plugin @since 0.2.2
    deactivate_plugins( plugin_basename( __FILE__ ) );
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
 * @uses remove_submenu_page( $menu_slug, $submenu_slug );
 *
 * @since 0.1
 * @modified 2014.07.08 - latest version of WPML don't have different URL anymore for the menu sync
 * @modified 2015.07.01 - adjusted for WPML 3.2.2 (tip by [skeptikas](https://github.com/skeptikas)
 */
function so_remove_wpml_menu_sync() {  
    
    global $submenu;

	remove_submenu_page( 'sitepress-multilingual-cms/menu/languages.php', 'sitepress-multilingual-cms/menu/menu-sync/menus-sync.php' );

}

add_action( 'admin_menu', 'so_remove_wpml_menu_sync', 999 );
