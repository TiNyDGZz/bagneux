<?php

function personnal_theme_init()
{
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
	
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	
	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'personnal', get_template_directory() . '/languages' );
	
	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) 	categories.
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'personnal' ),
	) );
	
function personnal_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'personnal' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'personnal' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'personnal' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'personnal' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
/** Register sidebars by running personnal_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'personnal_widgets_init' );


}

add_action('after_setup_theme','personnal_theme_init');

?>