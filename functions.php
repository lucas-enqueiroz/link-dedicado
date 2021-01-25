<?php 

// carrega os campos personalizados do CMB2
require_once get_template_directory() . '/cmb2/load.php';

add_theme_support( 'post-thumbnails' );

// Função para registrar os Scripts e o CSS
function dedicado_scripts() {

	// Registrar Main
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/script.js', array(), false, true );

	// Carrega o Script
	wp_enqueue_script( 'main-script' );	
}
add_action( 'wp_enqueue_scripts', 'dedicado_scripts' );

function dedicado_css() {
// 	wp_register_style( 'dedicado-style', get_template_directory_uri() . '/style.css', array(), false, false );
// 	wp_enqueue_style( 'dedicado-style' );
	wp_enqueue_style( 'dedicado-style', get_template_directory_uri() . '/css/style.min.css', true );
}
add_action( 'wp_enqueue_scripts', 'dedicado_css' );


// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->li_class)) {
			$classes[] = $args->li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Custom Post Type

function custom_post_type_servicos() {
	register_post_type('servicos', array(
		'label' => 'Serviços',
		'description' => 'Serviços',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'servicos', 'with_front' => true),
		'query_var' => true,
		'supports' => array("title", "editor", "thumbnail", "excerpt", "trackbacks",  "revisions", "page-attributes", "post-formats"),
    'show_in_rest' => true,
		'labels' => array (
			'name' => 'Serviços',
			'singular_name' => 'Serviço',
			'menu_name' => 'Serviços',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Serviço',
			'edit' => 'Editar',
			'edit_item' => 'Editar Serviço',
			'new_item' => 'Novo Serviço',
			'view' => 'Ver Serviço',
			'view_item' => 'Ver Serviço',
			'search_items' => 'Procurar Serviços',
			'not_found' => 'Nenhum Serviço Encontrado',
			'not_found_in_trash' => 'Nenhum Serviço Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_servicos');

function categoria_servico() {
  register_taxonomy( 'tipos_servico', array( 'servicos' ), 
    array(
      'hierarchical' => true,
      'label' => 'Tipo de Serviço',
      'show_ui' => true,
      'query_var' => true,
			'rewrite' => array( 'slug' => 'servicos' ),
			"show_admin_column" => true,
			// "public" => true,
			// "publicly_queryable" => true,
			// "show_in_menu" => true,
			// "show_in_nav_menus" => true,
			// "show_in_rest" => true,
			// "rest_base" => "servicos",
			// "rest_controller_class" => "WP_REST_Terms_Controller",
			// "show_in_quick_edit" => true,
    )
  );
}
add_action( 'init', 'categoria_servico' );