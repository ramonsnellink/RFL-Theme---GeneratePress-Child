<?php
/**
 * Enqueue Styles and scripts
 * 
 */


function rfl_styles() {
	wp_enqueue_style( 'rfl-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', [], filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );
}

// Changed to system fonts
// function google_fonts() {
//     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', false );
// }
// add_action( 'wp_enqueue_scripts', 'google_fonts',  99  );

add_action( 'wp_enqueue_scripts', 'rfl_styles',  99  );

add_filter( 'wp_trim_excerpt', 'tu_excerpt_metabox_more' );
function tu_excerpt_metabox_more( $excerpt ) {
    $output = $excerpt;

    if ( has_excerpt() ) {
        $output = sprintf( '%1$s <p class="read-more-container"><a class="read-more button" href="%2$s">%3$s</a></p>',
            $excerpt,
            get_permalink(),
            __( 'Read more', 'generatepress' )
        );
    }
	
    return $output;
}