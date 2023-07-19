<?php
/**
 * Exodus Child Theme (Example)
 * 
 * Code customizations are best made using a child theme so they are not lost during parent theme updates.
 *
 * See the guides for more information on using a child theme (changing styles, overriding templates, etc.).
 * 
 * http://churchthemes.com/guides/developer/child-theming/
 * http://codex.wordpress.org/Child_Themes
 */

// No direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Perform setup on after_setup_theme hook
// Default priority is 10 so 11 ensures this to run after the parent theme's setup
add_action( 'after_setup_theme', 'exodus_child_setup', 11 );

// Setup theme features, actions, filters, etc.
function exodus_child_setup() {

	// Load child theme language file
	// This will cause $locale.mo (e.g. en_US.mo) in the child theme's directory to load.
	// Optionally, it can go in wp-content/languages/themes/exodus-child-$locale.mo.
	//load_child_theme_textdomain( 'exodus-child' ); // use your own textdomain

	// Enqueue new stylesheets
	// See exodus_child_enqueue_styles() below
	//add_action( 'wp_enqueue_scripts', 'exodus_child_enqueue_styles' ); // front-end only

	// Enqueue new JavaScript files
	// See exodus_child_enqueue_scripts() below
	add_action( 'wp_enqueue_scripts', 'exodus_child_enqueue_scripts' ); // front-end only
	
	// Example of removing a function that is hooked
	// remove_action() works similarly
	// add_filter() and add_action() can subsequently be used to replace the hooked function
	//remove_filter( 'body_class', 'exodus_add_body_classes' ); // extra classes no longer added to <body>

	// Remove support for Events (Church Theme Content plugin)
	// Similarly, you can use add_theme_support to enable features
	//remove_theme_support( 'ctc-events' ); // removes post type, widgets, etc.

	// Remove a widget (Church Theme Framework)
	//remove_theme_support( 'ctfw-widget-events' );	

	// Remove a WordPress feature
	//remove_theme_support( 'automatic-feed-links' );

}

/**
 * Enqueue new stylesheets
 * 
 * See wp_enqueue_scripts action above
 */
function exodus_child_enqueue_styles() {

	wp_enqueue_style( 'exodus-child-stylesheet', CTFW_THEME_CHILD_URL . '/new-stylesheet.css', false, CTFW_THEME_VERSION );

	// you can enqueue more here
	
}

/**
 * Enqueue new JavaScript files
 *
 * See wp_enqueue_scripts action above
 */
function exodus_child_enqueue_scripts() {

	// Enqueue to the footer
	wp_enqueue_script( 'exodus-child-script', CTFW_THEME_CHILD_URL . '/js/custom.js', false, CTFW_THEME_VERSION, true );

	// you can enqueue more here

}
