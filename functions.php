<?php

function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'aqua-pearl' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'aqua-pearl' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'Front page sidebar', 'aqua-pearl'),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on the static front page template', 'aqua-pearl' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}

add_action( 'widgets_init', 'wpb_widgets_init' );

?>