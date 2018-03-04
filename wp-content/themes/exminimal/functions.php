<?php

/**
 * Register stylesheets.
 * Loads parent theme from parent folder before child theme stylesheet.
 */

function exminimal_frontscripts() {
	wp_enqueue_style( 'exminimal-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'exminimal-style', get_stylesheet_uri(), array( 'exminimal-parent-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'exminimal_frontscripts' );

