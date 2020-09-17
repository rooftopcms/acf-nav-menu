<?php
/*
 * Plugin Name: ACF Nav Menu
 * Plugin URI: https://error.agency
 * Description: Add-On plugin for Advanced Custom Fields (ACF) that adds a 'Nav Menu' Field type, based on Advanced Custom Fields: Nav Menu Field by Faison Zutavern
 * Version: 1.0.0
 * Author: Error Agency
 * Author URI: https://error.agency
 * License: GPL2 or later
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACF_Nav_Menu_Field_Plugin {

	/**
	 * Adds register hooks for the Nav Menu Field.
	 */
	public function __construct() {
		// version 5
		add_action( 'acf/include_field_types', array( $this, 'register_field' ) );
	}

	/**
	 * Loads up the Nav Menu Field
	 */
	public function register_field() {
		include_once 'nav-menu.php';
	}
	
}

new ACF_Nav_Menu_Field_Plugin();
