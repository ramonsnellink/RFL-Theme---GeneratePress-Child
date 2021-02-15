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


