<?php
/**
 * Remove Scripts, Styles and Functionality
 * 
 */

/** 
 * Remove jQuery 
*/

function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');   
}
add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );


/** 
 * Remove default style.css from being loaded
*/

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'generate-child' );
}, 50 );
