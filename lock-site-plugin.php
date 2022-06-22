<?php
/*
* @package lock_site
*
/*
Plugin Name: lock_site plugin
Plugin URI: http://lock_site.com/plugin
Description: This is my first plugin
Version:1.0.0
Author: Maryam "Maryam" khan
Author URI:http://lock_siteplugin2022.com
Liscense:GPLv2 or later
Text Domain:lock_site-plugin
*/


if (! defined('ABSPATH')) {
	die;
}

if(! class_exists('Recipe_post_type')){
	
}


if ( ! defined( 'lock_site_PLUGIN_DIR' ) ) {
	define( 'lock_site_PLUGIN_DIR', __DIR__ );
}

if ( ! defined( 'lock_site_PLUGIN_DIR_URL' ) ) {
	define( 'lock_site_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'lock_site_ABSPATH' ) ) {
	define( 'lock_site_ABSPATH', dirname( __FILE__ ) );

//including loader file

include_once lock_site_ABSPATH . '/includes/class-submenu-loader.php';
}