<?php

// WP-LESS
add_action('init', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style('theme-main', get_stylesheet_directory_uri().'/less/style.less');
}

// Enable Menus
add_theme_support( 'menus' );

// Enable Thumbnails
add_theme_support( 'post-thumbnails' );

// Enable Custom Headers
$headerOptions = array(
	'width'                  => 1920,
	'height'                 => 1080,
	'header-text'            => false,
);
add_theme_support( 'custom-header', $headerOptions );

// Enable Custom Editor Styles
add_editor_style();

// Add Thumbnail Sizes
add_image_size( 'page-thumbnail', 800, 350, true );
add_image_size( 'team-thumbnail', 400, 250, true );

// Über uns
add_action( 'init', 'create_team' );
function create_team() {
	$labels = array(
		'name'               => _x( 'Team', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Teammitglied', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Team', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Teammitglied', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Hinzufügen', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Teammitglied hinzufügen', 'your-plugin-textdomain' ),
		'new_item'           => __( 'Neues Teammitglied', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Teammitglied bearbeiten', 'your-plugin-textdomain' ),
		'view_item'          => __( 'Teammitglied ansehen', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Alle Teammitglieder', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Suche Teammitglieder', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Teammitglieder:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'Keine Teammitglieder gefunden.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'Keine Teammitglieder im Papierkorb', 'your-plugin-textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-groups',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 100,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
	);

	register_post_type( 'team', $args );
}

?>