<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/fightforthefuture
 * @since             1.0.0
 * @package           Earth_Day_Live_Wp
 *
 * @wordpress-plugin
 * Plugin Name:       Earth Day Live WP
 * Plugin URI:        https://github.com/fightforthefuture/earth-day-live-wp
 * Description:       This plugin allows you to easily add the Earth Day Live widget to you Wordpress site.
 * Version:           1.0.0
 * Author:            Fight For The Future
 * Author URI:        https://github.com/fightforthefuture
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       earth-day-live-wp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EARTH_DAY_LIVE_WP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-earth-day-live-wp-activator.php
 */
function activate_earth_day_live_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-earth-day-live-wp-activator.php';
	Earth_Day_Live_Wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-earth-day-live-wp-deactivator.php
 */
function deactivate_earth_day_live_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-earth-day-live-wp-deactivator.php';
	Earth_Day_Live_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_earth_day_live_wp' );
register_deactivation_hook( __FILE__, 'deactivate_earth_day_live_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-earth-day-live-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_earth_day_live_wp() {

	$plugin = new Earth_Day_Live_Wp();
	$plugin->run();

}
run_earth_day_live_wp();
