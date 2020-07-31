<?php
/**
 * Enqueue script tags
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package richardcodes
 */

function richardcodes_scripts() {

	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Lora:400,700&display=swap', false);
	
	wp_enqueue_style('richardcodes-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/style.css' ));

	wp_enqueue_script( 'richardcodes-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'richardcodes-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'richardcodes-scripts', get_template_directory_uri() . '/assets/js/main.min.js', NULL, 2.0, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'richardcodes_scripts' );