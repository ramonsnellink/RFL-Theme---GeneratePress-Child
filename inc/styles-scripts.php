<?php
/**
 * Enqueue Styles and scripts
 * 
 */


function rfl_styles() {
	wp_enqueue_style( 'rfl-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', [], filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );
}

function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts',  99  );
add_action( 'wp_enqueue_scripts', 'rfl_styles',  99  );