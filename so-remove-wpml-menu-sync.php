<?php
/*
Plugin Name: SO Remove WPML Menu Sync
Plugin URI: https://github.com/senlin/so-remove-wpml-menu-sync
Description: This free WPML Addon removes the WP Menu Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.
Author: Piet Bos
Version: 0.1
Author URI: http://senlinonline.com
*/

/**
 * This function checks whether WPML is active (WPML needs to be active for this to have any use)
 * and gives a warning message with link to WPML if it is not active.
 *
 * modified using http://wpengineer.com/1657/check-if-required-plugin-is-active/ and the _no_wpml_warning function
 */

$plugins = get_option( 'active_plugins' );

$required_plugin = 'sitepress-multilingual-cms/sitepress.php';

if ( ! in_array( $required_plugin , $plugins ) ) {

	add_action( 'admin_notices', 'so_no_wpml_warning' );

}

function so_no_wpml_warning() {
    
    echo '<div class="message error"><p>';
    
    printf(__( 'The <strong>SO Remove WPML Menu Sync plugin</strong> only works if you have the <a href="%s">WPML</a> plugin installed.', 'theme-text-domain' ), 
        'http://wpml.org/' );
    
    echo '</p></div>';
}

/**
 * This function hides the WPML nav menu synchronisation link in backend
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
 * This function removes the WPML Menu Sync submenu
 */

/* Remove WP Menus Sync - http://wp.tutsplus.com/tutorials/creative-coding/customizing-your-wordpress-admin/ */
function so_remove_wpml_menu_sync() {  
    global $submenu;  

	if ( is_plugin_active( 'wpml-translation-management/plugin.php' ) ) {
		
		remove_submenu_page( 'wpml-translation-management/menu/main.php', 'sitepress-multilingual-cms/menu/menus-sync.php' );
		
	} else {
		
		remove_submenu_page('sitepress-multilingual-cms/menu/languages.php','sitepress-multilingual-cms/menu/menus-sync.php');
		
	}

}

add_action( 'admin_menu', 'so_remove_wpml_menu_sync', 999 );
