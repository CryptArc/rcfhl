<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rcfhl-theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rcfhl_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'rcfhl_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rcfhl_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'rcfhl_theme_pingback_header' );

function rcfhl_register_nav_menus() {
	register_nav_menu( 'sub_nav', 'Sub Navigation Menu');
	register_nav_menu( 'main_nav', 'Main Navigation Menu');
	register_nav_menu( 'about_footer_nav', 'About Footer Navigation Menu');
	register_nav_menu( 'useful_link_nav', 'Useful Link Footer Navigation Menu');
}
add_action( 'after_setup_theme', 'rcfhl_register_nav_menus');

add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
	$template_file = $template_file = basename( get_page_template() );
	if($template_file == 'template-home.php' || 'template-register.php'){ // template
		remove_post_type_support('page', 'editor');
	}
}



