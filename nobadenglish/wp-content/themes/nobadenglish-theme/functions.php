<?php
/**
 * nobadenglish-theme functions and definitions
 *
 * @package nobadenglish-theme
 */

add_action( 'wp_enqueue_scripts', 'theme_name_mainassets' );

function theme_name_mainassets() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	wp_enqueue_script( 'nbe-main-script', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), null, true );
	wp_enqueue_script( 'nbe-common', get_template_directory_uri() . '/assets/js/common.js', array('nbe-main-script'), null, true );
}