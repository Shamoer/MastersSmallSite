<?php
/**
 * Plugin Name: Masters Registration
 * Description: A plugin for registering users for the Masters of Brugge tournament, including bank transfer functionality.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include necessary files
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/bank-transfer.php';

// Register activation hook
function masters_registration_activate() {
    // Code to run on plugin activation
}
register_activation_hook( __FILE__, 'masters_registration_activate' );

// Register deactivation hook
function masters_registration_deactivate() {
    // Code to run on plugin deactivation
}
register_deactivation_hook( __FILE__, 'masters_registration_deactivate' );

// Enqueue styles and scripts
function masters_registration_enqueue_assets() {
    wp_enqueue_style( 'masters-registration-styles', plugins_url( 'assets/css/plugin-styles.css', __FILE__ ) );
    wp_enqueue_script( 'masters-registration-scripts', plugins_url( 'assets/js/plugin-scripts.js', __FILE__ ), array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'masters_registration_enqueue_assets' );

// Add additional functionality here
?>