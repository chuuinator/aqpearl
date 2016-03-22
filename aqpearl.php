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

	
=======

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> origin/master
<php add_action('wp_footer', 'mp_footer'); 

function aqpearl_admin_actions() {
    add_options_page("aqpearl Product Display", "aqpearl Product Display", 1, "aqpearl Product Display", "aqpearl_admin");
}
 
add_action('admin_menu', 'aqpearl_admin_actions');

function aqpearl_admin() {
    include('aqpearl_import_admin.php');
}
 
function aqpearl_admin_actions() {
    add_options_page("aqpearl Product Display", "aqpearl Product Display", 1, "aqpearl Product Display", "aqpearl_admin");
}
 
add_action('admin_menu', 'aqpearl_admin_actions');

<div class="wrap">
    <?php    echo "<h2>" . __( 'aqpearl Product Display Options', 'aqpearl_trdom' ) . "</h2>"; ?>
     
    <form name="aqpearl_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="aqpearl_hidden" value="Y">
        <?php    echo "<h4>" . __( 'aqpearl Database Settings', 'aqpearl_trdom' ) . "</h4>"; ?>
        <p><?php _e("Database host: " ); ?><input type="text" name="aqpearl_dbhost" value="<?php echo $dbhost; ?>" size="20"><?php _e(" ex: localhost" ); ?></p>
        <p><?php _e("Database name: " ); ?><input type="text" name="aqpearl_dbname" value="<?php echo $dbname; ?>" size="20"><?php _e(" ex: oscommerce_shop" ); ?></p>
        <p><?php _e("Database user: " ); ?><input type="text" name="aqpearl_dbuser" value="<?php echo $dbuser; ?>" size="20"><?php _e(" ex: root" ); ?></p>
        <p><?php _e("Database password: " ); ?><input type="text" name="aqpearl_dbpwd" value="<?php echo $dbpwd; ?>" size="20"><?php _e(" ex: secretpassword" ); ?></p>
        <hr />
        <?php    echo "<h4>" . __( 'aqpearl Store Settings', 'aqpearl_trdom' ) . "</h4>"; ?>
        <p><?php _e("Store URL: " ); ?><input type="text" name="aqpearlp_store_url" value="<?php echo $store_url; ?>" size="20"><?php _e(" ex: http://www.google.com/" ); ?></p>
        <p><?php _e("Product image folder: " ); ?><input type="text" name="aqpearl_prod_img_folder" value="<?php echo $prod_img_folder; ?>" size="20"><?php _e(" ex: http://www.google.com/images/" ); ?></p>
         
     
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'aqpearl_trdom' ) ?>" />
        </p>
    </form>
</div>



=======
<?php
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
=======

// Create the Widget

class ProductPostWidget extends WP_Widget {
	
	// Initialize the Widget
	public function __construct() {
		$widget_ops = array('classname' => 'widget_products', 'description' => __( 'A Display of your site&#8217;s Product Posts.') );
		// Adds a class to the widget and provides a description on the Widget page to describe what the widget does.
		parent::__construct('product_posts', __('Product Posts', 'tmj'), $widget_ops);
	}
>>>>>>> origin/master
>>>>>>> origin/master

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
>>>>>>> origin/master
