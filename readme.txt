=== SO Remove WPML Menu Sync ===
Contributors: senlin
Donate link: http://so-wp.com/donations
Tags: wpml, menu, sync, synchronization, addon
Requires at least: 2.0
Tested up to: 4.2
Stable tag: 2015.04.09
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This free WPML Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend.

== Description ==

This plugin is an Addon for the amazing *WPML Plugin*.

The WP Menus Sync feature of WPML can be very useful if all the content that is going to be part of the menu items in the navigation menu(s) too already has been translated. However not all people (developers) have that luxury and therefore choose to translate the navigation menu(s) manually.

In that case it would not be a good idea when the client unwittingly clicks on that WPML submenu (or on the synchronization link in the Menus page) and starts syncing menus.

It is therefore that I have developed this small Addon. Of course people other than developers can also use the addon if they don't want to use the navigation menu synchronization tool of WPML.

First of all it checks whether WPML has been installed. If it has it will hide the synchronization link from the Appearance &gt; Menus page. 

It also removes the link from the WPML submenu in the Dashboard sidebar.

The Addon doesn't come with any settings.

I have decided to only support this plugin through [Github](https://github.com/senlin/so-remove-wpml-menu-sync/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue over at Github. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

**PLEASE DO NOT POST YOUR ISSUES VIA THE WORDPRESS FORUMS**

Thanks for your understanding and cooperation.


== Installation ==

Go to **Plugins > Add New** in your WordPress Dashboard, do a search for "so remove wpml menu sync" and install it.

 &hellip; OR &hellip;


 1. Download zip file.

 2. Upload the zip file via the Plugins > Add New > Upload page &hellip; OR &hellip; unpack and upload with your favourite FTP client to the /plugins/ folder.

 3. Activate the plugin on the Plugins page.

Done!


== Frequently Asked Questions ==

= Where are the Settings? =

You can stop looking, there are no settings. The Addon just works in the background.

= Why is the plugin showing an error message after activation? =

This plugin is an Addon for [WPML](http://wpml.org), the plugin that enables any WordPress website to become 100% multilingual. If you don't have WPML installed, this Addon is useless, so better not install it.

= I have an issue with this plugin, where can I get support? =

Please open an issue on [Github](https://github.com/senlin/so-remove-wpml-menu-sync/issues)

== Screenshots ==

none

== Changelog ==

= 2015.04.09 =

* changed logos
* new banner image for WP.org Repo by [Rula Sibai](https://unsplash.com/rulasibai)

= 2014.07.08 =

* adjusted removal to latest WPML versions
* upped minimum required WP version to 3.9

= 2014.01.02 =

* removed constants function

= 2013.12.27 =

* tested up to WP 3.9-alpha
* change version number format
* adjust links readme file to new [SO WP website](http://so-wp.com)

= 0.2.2 =

* disabled warning on multisite installs, because warning was showing even if WPML has been installed
* added plugin deactivation to warning message when WPML has not been installed

= 0.2.1 =

* change text domain to prepare for language packs (via Otto - http://otto42.com/el)

= 0.2 =

* Add version check
* Update minimum required version (WP 3.6)
* Compatible up to 3.7.1

= 0.1 =

* First stable release
