<?php
if ( ! function_exists('ibap_custom_post_types') ) {

// Register Custom Post Type
function ibap_custom_post_types() {

	$labels = array(
		'name'                => _x( 'Artigos', 'Post Type General Name', 'ibap-theme' ),
		'singular_name'       => _x( 'Artigo', 'Post Type Singular Name', 'ibap-theme' ),
		'menu_name'           => __( 'Artigos', 'ibap-theme' ),
		'name_admin_bar'      => __( 'Artigos', 'ibap-theme' ),
		'parent_item_colon'   => __( 'Artigo Parente:', 'ibap-theme' ),
		'all_items'           => __( 'Todos artigos', 'ibap-theme' ),
		'add_new_item'        => __( 'Adicionar novo Artigo', 'ibap-theme' ),
		'add_new'             => __( 'Adicionar novo', 'ibap-theme' ),
		'new_item'            => __( 'Novo artigo', 'ibap-theme' ),
		'edit_item'           => __( 'Editar Artigo', 'ibap-theme' ),
		'update_item'         => __( 'Atualizar artigo', 'ibap-theme' ),
		'view_item'           => __( 'Ver artigo', 'ibap-theme' ),
		'search_items'        => __( 'Buscar Artigo', 'ibap-theme' ),
		'not_found'           => __( 'Não encontrado', 'ibap-theme' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'ibap-theme' ),
	);
	$args = array(
		'label'               => __( 'Artigo', 'ibap-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-text',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'artigos', $args );

}
add_action( 'init', 'ibap_custom_post_types', 0 );

}