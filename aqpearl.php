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

//register custom post type

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'aqua_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

// Create the Widget

class ProductPostWidget extends WP_Widget {
	
	// Initialize the Widget
	public function __construct() {
		$widget_ops = array('classname' => 'widget_products', 'description' => __( 'A Display of your site&#8217;s Product Posts.') );
		// Adds a class to the widget and provides a description on the Widget page to describe what the widget does.
		parent::__construct('product_posts', __('Product Posts', 'tmj'), $widget_ops);
	}