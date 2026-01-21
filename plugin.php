<?php

/**
 * Plugin Name: UCSC WWW Functionality
 * Plugin URI: https://github.com/ucsc/ucsc-www-functionality/
 * Description: Custom functionality for the UCSC main website
 * Version: 1.0.2
 * Author: UC Santa Cruz
 * Author URI: https://www.ucsc.edu
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: ucsc-www-functionality
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'UCSC_WWW_FUNCTIONALITY_VERSION', '1.0.0' );

/**
 * Plugin directory path.
 */
define( 'UCSC_WWW_FUNCTIONALITY_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin directory URL.
 */
define( 'UCSC_WWW_FUNCTIONALITY_URL', plugin_dir_url( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 */
function activate_ucsc_www_functionality() {
	// Activation code here
}
register_activation_hook( __FILE__, 'activate_ucsc_www_functionality' );

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_ucsc_www_functionality() {
	// Deactivation code here
}
register_deactivation_hook( __FILE__, 'deactivate_ucsc_www_functionality' );

/**
 * Initialize the plugin.
 */
function ucsc_www_functionality_init() {
	// Load plugin text domain
	load_plugin_textdomain(
		'ucsc-www-functionality',
		false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages/'
	);

	// Include required files
	require_once UCSC_WWW_FUNCTIONALITY_PATH . 'lib/functions.php';
}
add_action( 'plugins_loaded', 'ucsc_www_functionality_init' );
