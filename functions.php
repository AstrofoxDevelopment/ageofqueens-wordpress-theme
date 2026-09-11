<?php
declare( strict_types=1 );

function ageofqueenstheme_scripts(): void {
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/build/index.js', null, null );
	wp_enqueue_style( 'mainStyle', get_stylesheet_directory_uri() . '/build/style-index.css' );
}

add_action( 'wp_enqueue_scripts', 'ageofqueenstheme_scripts' );
