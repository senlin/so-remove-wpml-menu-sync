=== SO Remove WPML Menu Sync ===
Contributor: senlin
Tags: wpml, menu, sync, synchronization, addon
Requires at least: 3.5
Tested up to: 3.6
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This free [WPML](http://wpml.org) Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.

== Description ==

The WP Menus Sync feature of WPML can be very useful if all the content that is going to be part of the menu items in the navigation menu(s) too already has been translated. However not all people (developers) have that luxury and therefore choose to translate the navigation menu(s) manually.

In that case it would not be a good idea when the client unwittingly clicks on that WPML submenu (or on the synchronization link in the Menus page) and starts syncing menus.

It is therefore that I have developed this small Addon. Of course people other than developers can also use the addon if they don't want to use the navigation menu synchronization tool of WPML.

First of all it checks whether WPML has been installed. If it has it will hide the synchronization link from the Appearance &gt; Menus page. 

The way the WPML sidebar menu in the WordPress back end is built up depends on whether the Translation Management Addon has been installed, so this Addon also does a quick check on that, before it removes the Menu Sync submenu.

The Addon doesn't come with any settings.

I have decided to only support this plugin through [Github](https://github.com/so-wp/so-remove-wpml-menu-sync/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue over at Github. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

**PLEASE DO NOT POST YOUR ISSUES VIA THE WORDPRESS FORUMS**

Thanks for your understanding and cooperation.


## Installation

Quick installation: [Install now](http://coveredwebservices.com/wp-plugin-install/?plugin=so-remove-wpml-menu-sync) !

 &hellip; OR &hellip;

Go to **Plugins > Add New** in your WordPress Dashboard, do a search for "so remove wpml menu sync" and install it.

 &hellip; OR &hellip;


 1. Download zip file.

 2. Upload the zip file via the Plugins > Add New > Upload page &hellip; OR &hellip; unpack and upload with your favourite FTP client to the /plugins/ folder.

 3. Activate the plugin on the Plug-ins page.

Done!


== Frequently Asked Questions ==

= Where are the Settings? =

You can stop looking, there are no settings. The Addon just works in the background.

= Why is the plugin showing an error message after activation? =

This plugin is an Addon for [WPML](http://wpml.org), the plugin that enables any WordPress website to become 100% multilingual. If you don't have WPML installed, this Addon is useless, so better not install it.

= I have an issue with this plugin, where can I get support? =

Please open an issue here on [Github](https://github.com/so-wp/so-remove-wpml-menu-sync/issues)

== Screenshots ==

none

== Changelog ==

= 0.1 =

* First stable release
