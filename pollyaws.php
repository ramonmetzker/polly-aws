<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ramonmetzker.dev.br
 * @since             1.0.0
 * @package           Pollyaws
 *
 * @wordpress-plugin
 * Plugin Name:       Polly AWS
 * Plugin URI:        https://packagist.org/packages/ramonmetzker/polly-aws
 * Description:       Plugin para conversão Text-to-speech usando o serviço Polly da Amazon
 * Version:           1.0.2
 * Author:            Ramon Metzker, Mobister, Blacklab
 * Author URI:        https://www.mobister.com.br/
 * License:           MIT
 * License URI:       https://github.com/ramonmetzker/polly-aws/blob/master/LICENSE
 * Text Domain:       pollyaws
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pollyaws-activator.php
 */
function activate_pollyaws() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pollyaws-activator.php';
	Pollyaws_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pollyaws-deactivator.php
 */
function deactivate_pollyaws() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pollyaws-deactivator.php';
	Pollyaws_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pollyaws' );
register_deactivation_hook( __FILE__, 'deactivate_pollyaws' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pollyaws.php';

/*
 * Log error messages for CloudFront setup in this file
 */
update_option('aws_cloudfront_logfile',plugin_dir_path(__FILE__).'amazon_ai_cloudfront.log');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pollyaws() {

	$plugin = new Pollyaws();
	$plugin->run();

}
run_pollyaws();
