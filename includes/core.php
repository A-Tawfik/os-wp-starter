<?php
namespace OS_WP\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @return void
 */
function setup() {
	$n = function ( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'wp_enqueue_scripts', $n( 'scripts' ) );
	add_action( 'wp_enqueue_scripts', $n( 'styles' ) );
	add_action( 'after_setup_theme', $n( 'features' ) );
	// add_action( 'pre_get_posts', $n( 'modify_queries' ) );
	add_action( 'send_headers', $n( 'cors' ) );
	add_action( 'init', $n( 'add_menus' ) );

	// Remove WordPress header cruft
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'wp_generator' );
}
/**
 * Add CORS access
 */
function cors() {
	if ( ! did_action('rest_api_init') && $_SERVER['REQUEST_METHOD'] == 'HEAD' ) {
		header( 'Access-Control-Allow-Origin: *' );
		header( 'Access-Control-Expose-Headers: Link' );
		header( 'Access-Control-Allow-Methods: HEAD' );
	}
}



/**
 * Add feature support to theme
 */
function features() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_post_type_support( 'page', 'excerpt' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}

/**
 * Enqueue scripts for front-end.
 *
 * @param bool $debug Whether to enable loading uncompressed/debugging assets. Default false.
 *
 * @return void
 */
function scripts( $debug = false ) {
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// wp_enqueue_script(
	// 	'main',
	// 	OS_WP_TEMPLATE_URL . "/assets/js/main{$min}.js",
	// 	array('jquery'),
	// 	OS_WP_VERSION,
	// 	true
	// );


	    wp_enqueue_script( 'app', 'http://localhost:3000/static/js/bundle.js', array(), false, true );
	    wp_localize_script( 'app', 'WP_API_Settings', array(
	        'root' => esc_url_raw( rest_url() ),
	        'nonce' => wp_create_nonce( 'wp_rest' )
	    ) );


	// wp_enqueue_script(
	// 	'main',
	// 	OS_WP_TEMPLATE_URL . "/build/static/js/main.js",
	// 	array(),
	// 	OS_WP_VERSION,
	// 	true
	// );
}

/**
 * Enqueue styles for front-end.
 *
 * @param bool $debug Whether to enable loading uncompressed/debugging assets. Default false.
 *
 * @return void
 */
function styles( $debug = false ) {
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style(
		'style',
		get_template_directory_uri() . '/build/static/css/main.css',
		array(),
		OS_WP_VERSION
	);
}

/**
 * Modify default queries in specific areas of the site
 *
 * @param $query
 */
function modify_queries( $query ) {

   	// Perform query modifications here

}

/**
 * Add Menus
 *
 * @param $query
 */
function add_menus() {
	// Register main footer and one for each school
	register_nav_menus(
		array(
			'primary' => 'Primary',
		)
	);
}
