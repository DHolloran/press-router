<?php
/*
Plugin Name: Press Router.
Description: Router solution for WordPress.
Plugin URI: https://danholloran.me
Author: Dan Holloran
Author URI: https://danholloran.me
Version: 1.0
License: GPL2
*/

/**
 * Plugin Constants
 */
define( 'PRESS_ROUTER_VERSION', '1.0.0' );
define( 'PRESS_ROUTER_PLUGIN_DIR_PATH', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'PRESS_ROUTER_PLUGIN_URL', plugins_url( 'press-router' ) );

require __DIR__ . '/vendor/autoload.php';
