<?php
// Register Custom Navigation Walker
require_once get_template_directory().'/assets/class-wp-bootstrap-navwalker.php';

function load_stylesheets() {
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
  //Deregister the jquery script, in the event that it is not loaded
  wp_deregister_style('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', '', 1.0, true);
  wp_register_script('popper', get_template_directory_uri().'/js/popper.js', '', 1.0, true);
  wp_enqueue_script('popper');
  wp_register_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.js', '', 1.0, true);
  wp_enqueue_script('bootstrapjs');
  wp_register_script('customjs', get_template_directory_uri().'/js/scripts.js', '', 1.0, true);
  wp_enqueue_script('customjs');
}
//
add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * Register sidebars and widgetized areas.
 */
function add_widgets_support() {
  register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'add_widgets_support' );

//
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


function setup_menus() {
  register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  ));
}
add_action('after_setup_theme', 'setup_menus');


/* MINICART SIDEBAR OVERRIDE */
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20 );
function my_woocommerce_widget_shopping_cart_button_view_cart() {
    echo '<div class="col"><a href="'.esc_url( wc_get_cart_url() ).'" class="button wc-forward">'.esc_html__( 'View Basket', 'woocommerce' ) . '</a></div>';
}
function my_woocommerce_widget_shopping_cart_proceed_to_checkout() {
    echo '<div class="col"><a href="'.esc_url( wc_get_checkout_url() ).'" class="button wc-forward">'.esc_html__( 'Checkout', 'woocommerce' ) . '</a></div>';
}
add_action( 'woocommerce_widget_shopping_cart_buttons', 'my_woocommerce_widget_shopping_cart_button_view_cart', 10 );
add_action( 'woocommerce_widget_shopping_cart_buttons', 'my_woocommerce_widget_shopping_cart_proceed_to_checkout', 20 );

//Add the "woocommerce" class to the starting tag of the "body"
add_filter( 'body_class', 'woocommerceotherpages' );
function woocommerceotherpages( $classes ) {
  //If the current page template is that of "header.php"
    if ( is_page_template( 'header.php' )) {
        //Add "woocommerce" to the classes array
        $classes[] = 'woocommerce';
    }
    //Return the classes array
    return $classes;
}
