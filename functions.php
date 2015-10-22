<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function xango_child_load_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'xango-child-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), null, 'all' );

	wp_enqueue_style( 'xango-child-sourcesans', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,900italic,900,700italic,700,600italic,600,400italic', array(), null, 'all' );

	wp_enqueue_script( 'main-xango-childjs', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array(), true );
}

add_action( 'wp_enqueue_scripts', 'xango_child_load_scripts', 99999 );

/* Brasa slider actions */
function ibap_before_slider_home() {
	echo '<div class="ibap-slider-home col-md-12">';
	echo '<div class="container">';
}
add_action( 'brasa_slider_home_before', 'ibap_before_slider_home' );

/* Brasa slider actions */
function ibap_after_slider_home() {
	echo '</div>';
	echo '</div>';
	get_template_part( 'parts/slider-noticias' );
	get_template_part( 'parts/about-section' );
	get_template_part( 'parts/biblioteca-footer' );

}
add_action( 'brasa_slider_home_after', 'ibap_after_slider_home' );

function ibap_slider_text_box($str){
	global $brasa_slider_id, $brasa_slider_item_id;

	$brasa_slider_item_id = intval( $brasa_slider_item_id );
    
 	if( get_the_title( $brasa_slider_id ) != 'Slider home' ) {
  		return $str;
  	}
  	if (  wp_attachment_is_image( $brasa_slider_item_id ) ) {
  		return $str;
  	}
  	$str .= '<div class="col-md-3 text-box">';
  	$str .= sprintf( '<h3>%s</h3>', get_the_title( $brasa_slider_item_id ) );
  	$str .= sprintf( '<div class="content">%s</div>', odin_get_excerpt( $brasa_slider_item_id ) );
  	$str .= '</div>';
  	return $str;
}
add_filter('brasa_slider_loop_after_image','ibap_slider_text_box');
// Load custom post types & taxs 
require_once get_stylesheet_directory() . '/inc/cpts.php';

// ACF & Customizer
require_once get_template_directory() . '/inc/advanced-custom-fields/acf.php';
//require_once get_template_directory() . '/inc/acf-options-page/acf-options-page.php';
//require_once get_template_directory() . '/inc/acf-repeater/acf-repeater.php';
require_once get_stylesheet_directory() . '/inc/fields.php';
require_once get_stylesheet_directory() . '/inc/customizer.php';

