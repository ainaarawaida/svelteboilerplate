<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://svelteboilerplate
 * @since      1.0.0
 *
 * @package    Svelteboilerplate
 * @subpackage Svelteboilerplate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Svelteboilerplate
 * @subpackage Svelteboilerplate/includes
 * @author     svelteboilerplate <svelteboilerplate@luqmannordin.com>
 */
class Svelteboilerplate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'svelteboilerplate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
