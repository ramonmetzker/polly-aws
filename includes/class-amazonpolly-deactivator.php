<?php
/**
 * Fired during plugin deactivation
 *
 * @link       amazon.com
 * @since      1.0.0
 *
 * @package    Pollyaws
 * @subpackage Pollyaws/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Pollyaws
 * @subpackage Pollyaws/includes
 * @author     AWS Labs
 */
class Pollyaws_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		// Flush the permalinks to disable the "amazon-pollycast" route.
		flush_rewrite_rules();
	}

}
