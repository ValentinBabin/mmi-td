<?php

show_admin_bar(true);
add_theme_support( 'post-thumbnails' );

/** STYLES */
/**
 * Enqueue scripts and styles.
 */
function init_scripts() {
    // style css
	wp_enqueue_style( 'flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css', array());
	wp_enqueue_style('global-style', get_template_directory_uri().'/public/css/global.css', [], null, 'all');

    // lib js
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array());
	wp_enqueue_script( 'custom-script', get_template_directory_uri().'/public/js/global.js');
	wp_enqueue_script( 'flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js', array(), null, false);
}
add_action( 'wp_enqueue_scripts', 'init_scripts' );


/** ACF */
function acf_json_save_groups($path) {
	return get_stylesheet_directory() . '/inc';
}
add_filter( 'acf/settings/save_json', 'acf_json_save_groups' );

function acf_json_load_point($paths) {
	unset($paths[0]);
	$paths[] = get_stylesheet_directory() . '/inc';
	return $paths;
}
add_filter('acf/settings/load_json', 'acf_json_load_point');


/** MENUS */
function register_custom_menus() {
    register_nav_menus(
      array(
        'header-primary-menu' => __('Menu principal header'),
        'footer-menu' => __('Menu footer'),
        'header-secondary-menu' => __('Menu secondaire header'),
      )
    );
}
add_action('init', 'register_custom_menus');

// Register Custom Post Type
function init_staff_custom_post_type() {

	$labels = array(
		'name'                  => 'Membres',
		'singular_name'         => 'Membre',
		'menu_name'             => 'Membres',
		'name_admin_bar'        => 'Post Type',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
    $rewrite = array(
		'slug'                  => 'teams',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Membre',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'staff', $args );

}
add_action( 'init', 'init_staff_custom_post_type', 0 );
  