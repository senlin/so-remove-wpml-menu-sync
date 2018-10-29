# SO Remove WPML Menu Sync

[![plugin version](https://img.shields.io/wordpress/plugin/v/so-remove-wpml-menu-sync.svg)](https://wordpress.org/plugins/so-remove-wpml-menu-sync)

###### Last updated on October 29, 2018
###### requires at least WordPress 4.0
###### tested up to WordPress 5.0
###### tested up to ClassicPress 1.0.0
###### Author: [Pieter Bos](https://github.com/senlin)
###### [Stable Version](https://wordpress.org/plugins/so-remove-wpml-menu-sync) (via WordPress Plugins Repository)
###### [Plugin homepage](https://so-wp.com/plugin/remove-wpml-menu-sync)


This free [WPML](https://wpml.org) Addon removes the WP Menus Sync sub menu from the WPML sidebar menu in the backend and it hides the menu synchronization link that is displayed on the nav-menus pages.

## Description

The WP Menus Sync feature of WPML can be very useful if all the content that is going to be part of the menu items in the navigation menu(s) too already has been translated. However not all people (developers) have that luxury and therefore choose to translate the navigation menu(s) manually.

In that case it would not be a good idea when the client unwittingly clicks on that WPML submenu (or on the synchronization link in the Menus page) and starts syncing menus.

It is therefore that I have developed this small Addon. Of course people other than developers can also use the addon if they don't want to use the navigation menu synchronization tool of WPML.

First of all it checks whether WPML has been installed. If it has it will hide the synchronization link from the Appearance &gt; Menus page. 

It also removes the link from the WPML submenu in the Dashboard sidebar.

The Addon doesn't come with any settings.

## Frequently Asked Questions

### Where are the Settings?

You can stop looking, there are no settings. The Addon just works in the background.

### Why is the plugin showing an error message after activation?

This plugin is an Addon for [WPML](https://wpml.org), the plugin that enables any WordPress website to become 100% multilingual. If you don't have WPML installed, this Addon is useless, so better not install it.

### I have an issue with this plugin, where can I get support?

Please open an issue here on [Github](https://github.com/senlin/so-remove-wpml-menu-sync/issues)

## Contributions

This repo is open to _any_ kind of contributions.

## License

* License: GNU Version 2 or Any Later Version
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Donations

* Donate link: https://so-wp.com/plugins/donations

## Connect with me through

[BHI Consulting for Websites](https://bohanintl.com)

[SO WP](https://so-wp.com)

[Github](https://github.com/senlin) 

[LinkedIn](https://www.linkedin.com/in/pietbos) 

[WordPress](https://profiles.wordpress.org/senlin/) 

## Changelog

### 1.2.1

* October 29, 2018
* fix bug that showed the sync link in nav menus page
* verified compatibility WP 5.0
* verified compatibility ClassicPress 1.0.0### 1.2

### 1.2.0

* date: June 1, 2017
* improve code
* remove redundant language files
* verified compatibility WP 4.8

### 1.1.2 (2016.11.29)

* remove version check
* compatible up to WP 4.7

### 1.1.1 (2015.08.05)

* revert to [semantic versioning](http://semver.org)
* compatible up to WP 4.3

### 1.1.0 (2015.07.01)

* main function adjusted for WPML 3.2.2 (tip by [skeptikas](https://github.com/skeptikas)

### 1.0.3 (2015.04.09)

* changed logos
* new banner image for WP.org Repo by [Rula Sibai](https://unsplash.com/rulasibai)

### 1.0.2 (2014.07.08)

* adjusted removal to latest WPML versions
* upped minimum required WP version to 3.9

### 1.0.1 (2014.01.02)

* removed constants function

### 1.0.0 (2013.12.27)

* tested up to WP 3.9-alpha
* change version number format
* adjust links readme file to new [SO WP website](http://so-wp.com)

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
