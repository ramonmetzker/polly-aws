<?php
/**
 * Fired during plugin activation
 *
 * @link       amazon.com
 * @since      1.0.0
 *
 * @package    Pollyaws
 * @subpackage Pollyaws/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Pollyaws
 * @subpackage Pollyaws/includes
 * @author     AWS Labs
 */
class Pollyaws_Activator {

	/**
	 * Initial configuration of the plugin.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		// Flush the permalinks to enable the "amazon-pollycast" route.
		$amazon_pollycast = new Pollyaws_PollyCast(new AmazonAI_Common());
		$amazon_pollycast->create_podcast();
		flush_rewrite_rules();


	}

}
