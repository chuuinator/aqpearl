<?php

/* 
* Plugin Name: aquapearl plugin
* Plugin URI: http://phoenix.sheridanc.on.ca
* Description: Basic wordpress plugin template 
* Author: Tanya, Mahreen, Jessica 
* Author URI: http://phoenix.shericanc.on.ca/~ccit3472
* Version: 1.0 
*/


// First Command: This calls the CSS file to the plugin
function tmj_plugin_enqueue_scripts (){
		wp_enqueue_style ('plugin', plugins_url ('new-plugins/css/style.css')); 
	} 
add_action( 'wp_enqueue_scripts','tmj_plugin_enqueue_scripts' );


// Shortcode to display Custom Post Type - from wordpress stack exchange
add_shortcode('custom_post_type', 'custom_post_type');
function custom_post_type($atts, $content){
  extract(shortcode_atts(array( 
   'posts_per_page' => '1',
   'post_type' => 'products', 
   'caller_get_posts' => 1)
   , $atts));

  global $post;

  $posts = new WP_Query($atts);
  $output = '';
    if ($posts->have_posts())
        while ($posts->have_posts()):
            $posts->the_post();
            $out = '<div class="product_box">
                <h4>Product Name: <a href="'.get_permalink().'" title="' . get_the_title() . '">'.get_the_title() .'</a></h4>
                <p class="product_desc">'.get_the_content().'</p>';
                // add here more...
            $out .='</div>';
    /* these arguments will be available from inside $content
        get_permalink()  
        get_the_content()
        get_the_category_list(', ')
        get_the_title()
        and custom fields
        get_post_meta($post->ID, 'field_name', true);
    */
    endwhile;
  else
    return; // no posts found

  wp_reset_query();
  return html_entity_decode($out);
}

// Button Shortcode link
function shortcode_link_button( $atts , $content=null ) {
	extract( shortcode_atts(
		array(
			'link'=>'http://sephora.com',
			'linktxt'=>'Our brand is available now at Sehpora!',
		), $atts )
	);
return'<div class="text"><div class="button-link-text">'.do_shortcode($content) .'
	</div><p><a href="'.$link.'" class="button-link">'.$linktxt.'</a></p></div>';

}
add_shortcode( 'shortcode_link_button', 'shortcode_link_button' );


?>