<?php
/* 
* Plugin Name: AquaPearl Plugin 
* Plugin URI: http://phoenix.sheridanc.on.ca/
* Description: A Basic WordPress Plugin Template 
* Author: Tanya, Mahreen, Jessica
* Author URI: http://phoenix.sheridanc.on.ca/~ccit3472 
* Version: 1.0 
*/

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_register_style( 'aqpearl', plugins_url( 'aqpearl/css/aqpearl.css' ) );
	wp_enqueue_style( 'aqpearl' );
}