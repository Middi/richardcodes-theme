<?php
/**
 * Sets up theme.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 
 * @package richardcodes
 */

if ( ! function_exists( 'richardcodes_setup' ) ) :
	
	function richardcodes_setup() {

		load_theme_textdomain( 'richardcodes', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'editor-styles' );
		
		add_editor_style( '/assets/css/style.css' );
		
		function register_my_menu() {
			register_nav_menu('header-menu','Header Menu');
		}
		add_action( 'init', 'register_my_menu' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'richardcodes_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'richardcodes_setup' );