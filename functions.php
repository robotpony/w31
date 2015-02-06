<?php
/*
 *  Author: Bruce Alderson | @robotpony
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

update_option('siteurl', NWHOST);
update_option('home', NWHOST);

add_theme_support( 'post-thumbnails' );

function nw_custom_scripts() {
	wp_enqueue_script( 'the-3', get_template_directory_uri() . '/js/the-3.js', array( 'jquery' ), '1.0.0', true );
}

function nw_custom_styles() {
	if ( ! is_admin() ) {
		 wp_enqueue_style(
			'screen',
			get_stylesheet_directory_uri() . '/css/the-3.less',
			'the-3.css',
			'1',
			'screen'
		);
	}
}

/* Queue up customizations */

add_action( 'wp_enqueue_scripts', 'nw_custom_scripts' );
add_action('wp_enqueue_scripts', 'nw_custom_styles', 500);

