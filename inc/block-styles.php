<?php
/**
 * Block Styles
 */

add_action('init', function() {
	register_block_style('core/button', [
		'name' => 'button-highlight',
		'label' => __('Highlight button', 'generatepress'),
	]);
});

add_action('init', function() {
	register_block_style('core/button', [
		'name' => 'button-light',
		'label' => __('Lighter Button - Dark gray Hover', 'generatepress'),
	]);
});

add_action('init', function() {
	register_block_style('core/button', [
		'name' => 'button-simple',
		'label' => __('Simple Button - Without background', 'generatepress'),
	]);
});

add_action('init', function() {
	register_block_style('core/gallery', [
		'name' => 'gallery-1lg-2sm',
		'label' => __('Gallery with 1 large image and 2 to the side', 'generatepress'),
	]);
});


