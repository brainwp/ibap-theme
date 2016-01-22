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
 	if( strtolower( get_the_title( $brasa_slider_id ) ) != 'slider home' ) {
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
//require_once get_stylesheet_directory() . '/inc/cpts.php';

// ACF & Customizer
require_once get_template_directory() . '/inc/advanced-custom-fields/acf.php';
//require_once get_template_directory() . '/inc/acf-options-page/acf-options-page.php';
//require_once get_template_directory() . '/inc/acf-repeater/acf-repeater.php';
require_once get_stylesheet_directory() . '/inc/fields.php';
require_once get_stylesheet_directory() . '/inc/customizer.php';
function add_odin_breadcrumb_xango() {
	if ( is_woocommerce() ) {
		get_template_part( '/parts/woocommerce-breadcrumbs' );
	}
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
// require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';

/* Agenda */

$eventos = new Odin_Post_Type(
    'Agenda', // Nome (Singular) do Post Type.
    'agenda' // Slug do Post Type.
);

$eventos->set_labels(
    array(
        'menu_name' => __( 'Agenda', 'odin' ),
	'name_admin_bar'      => __( 'Agenda', 'odin' ),
	'parent_item_colon'   => __( 'Evento parente', 'odin' ),
	'all_items'           => __( 'Todos eventos', 'odin' ),
	'add_new_item'        => __( 'Adicionar novo Evento', 'odin' ),
	'add_new'             => __( 'Adicionar novo', 'odin' ),
	'new_item'            => __( 'Novo evento', 'odin' ),
	'edit_item'           => __( 'Editar evento', 'odin' ),
	'update_item'         => __( 'Atualizar Evento', 'odin' ),
	'view_item'           => __( 'Ver evento', 'odin' ),
	'search_items'        => __( 'Buscar Evento', 'odin' ),
	'not_found'           => __( 'Não encontrado', 'odin' ),
	'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'odin' )
    )
);

$eventos->set_arguments(
    array(
       'label'               => __( 'agenda', 'odin' ),
	'description'         => __( 'Agenda de Eventos', 'odin' ),
	'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-calendar-alt',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
    )
);

function filter_query_agenda($query){
	if( is_admin() )
		return;

    if ( $query->is_main_query() && is_post_type_archive('agenda') ) {
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'meta_key', 'agenda_data' );
        $query->set( 'order', 'DESC' );

        $current = current_time('Ymd');
        $meta = array();
        $meta[] = array(
			'key' => 'agenda_data',
			'compare' => '>=',
			'value' => $current
		);

		$query->set('meta_query', $meta);

    }
    if ( is_page() && is_page_template('agenda-antigos.php') && $query->get('post_type') == 'agenda' && $query->get('posts_per_page') == get_option('posts_per_page') ) {
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'meta_key', 'agenda_data' );
        $query->set( 'order', 'DESC' );

        $current = current_time('Ymd');
        $meta = array();
        $meta[] = array(
			'key' => 'agenda_data',
			'compare' => '<',
			'value' => $current
		);

		$query->set('meta_query', $meta);

    }
    if ( $query->is_main_query() && is_post_type_archive('links') ) {
    	$query->set( 'posts_per_page', -1 );
    }
}
add_action( 'pre_get_posts', 'filter_query_agenda' );


add_action( 'xango_theme_slider_area', 'add_odin_breadcrumb_xango', 999 );

//remove title default location
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 ); 
/* check if has cat revistas or livros */
function get_woocommerce_cat_query() {
	global $post;
	if ( has_term( 'livros', 'product_cat', $post ) ) {
		return 'livros';
	}
	else {
		return 'revistas';
	}
}
