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

//Loop posts with featured image
<div id="gridcontainer">
				<?php 
					$counter = 1; //start counter
					$grids = 2; //Grids per row
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array('posts_per_page' => 4, 'paged' => $paged, 'cat' => 2);
					query_posts($args); 
					if(have_posts()) :  while(have_posts()) :  the_post();
				?>
				<?php
				//Show the left hand side column
					if($counter == 1) :
				?>
					<div class="gridleft">
					<div class="imagepost">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
					</div>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</div>
				<?php
				//Show the right hand side column
				elseif($counter == $grids) :
				?>
					<div class="gridright">
					<div class="imagepost">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
					</div>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</div>
				<div class="clear"></div>
					<?php
						$counter = 0;
						endif;
					?>
					<?php
						$counter++;
						endwhile; ?>
						<?php the_posts_pagination( $args ); ?> 
					<?php endif;
					?>
			</div>

