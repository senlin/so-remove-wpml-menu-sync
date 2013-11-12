# SO Remove WPML Menu Sync

###### Version 0.2.2
###### requires at least WordPress 3.6
###### tested up to 3.7.1
###### Author: [Piet Bos](https://github.com/senlin)


This free [WPML](http://wpml.org) Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.

## Description

The WP Menus Sync feature of WPML can be very useful if all the content that is going to be part of the menu items in the navigation menu(s) too already has been translated. However not all people (developers) have that luxury and therefore choose to translate the navigation menu(s) manually.

In that case it would not be a good idea when the client unwittingly clicks on that WPML submenu (or on the synchronization link in the Menus page) and starts syncing menus.

It is therefore that I have developed this small Addon. Of course people other than developers can also use the addon if they don't want to use the navigation menu synchronization tool of WPML.

First of all it checks whether WPML has been installed. If it has it will hide the synchronization link from the Appearance &gt; Menus page. 

The way the WPML sidebar menu in the WordPress back end is built up depends on whether the Translation Management Addon has been installed, so the Addon also does a quick check on that, before it removes the Menu Sync submenu.

The Addon doesn't come with any settings.

## Installation

Quick installation: [Install now](http://coveredwebservices.com/wp-plugin-install/?plugin=so-remove-wpml-menu-sync) !

 &hellip; OR &hellip;

Go to **Plugins > Add New** in your WordPress Dashboard, do a search for "so remove wpml menu sync" and install it.

 &hellip; OR &hellip;


 1. Download zip file.

 2. Upload the zip file via the Plugins > Add New > Upload page &hellip; OR &hellip; unpack and upload with your favourite FTP client to the /plugins/ folder.

 3. Activate the plugin on the Plug-ins page.

Done!

## Frequently Asked Questions

### Where are the Settings?

You can stop looking, there are no settings. The Addon just works in the background.

### Why is the plugin showing an error message after activation?

This plugin is an Addon for [WPML](http://wpml.org), the plugin that enables any WordPress website to become 100% multilingual. If you don't have WPML installed, this Addon is useless, so better not install it.

### I have an issue with this plugin, where can I get support?

Please open an issue here on [Github](https://github.com/so-wp/so-remove-wpml-menu-sync/issues)

## Contributions

This repo is open to _any_ kind of contributions.

## License

* License: GNU Version 2 or Any Later Version
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Donations

* Donate link: http://senl.in/PPd0na

## Connect with me through

[Github](https://github.com/senlin) 

[Google+](http://plus.google.com/u/0/108543145122756748887) 

[WordPress](http://profiles.wordpress.org/senlin/) 

[Website](http://senlinonline.com)

## Changelog

### 0.2.2

* disabled warning on multisite installs, because warning was showing even if WPML has been installed
* added plugin deactivation to warning message when WPML has not been installed

### 0.2.1

* change text domain to prepare for language packs (via Otto - http://otto42.com/el)

### 0.2

* Add version check
* Update minimum required version (WP 3.6)
* Compatible up to 3.7.1

###0.1

* First stable release
