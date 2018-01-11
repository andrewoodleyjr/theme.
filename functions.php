<?php 

function woodley_current_year(){

} 

function woodley_script_enqueue(){
	wp_enqueue_style('maincss', get_template_directory_uri() . '/css/style.css', array(), '1.0.5', 'all');
	wp_enqueue_style('socialcss', get_template_directory_uri() . '/css/social.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('generalcss', get_template_directory_uri() . '/css/general.css', array(), '1.0.4', 'all');
	wp_enqueue_style('kirkistylescurrlcss', get_template_directory_uri() . '/css/kirki-styles.css', array(), '1.0.0', 'all');

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/andrewoodleyjr.js', array(), '1.0.0', false);
	wp_enqueue_script('readmore', get_template_directory_uri() . '/js/Readmore.js-master/readmore.min.js', array(), '1.0.0', false);
	wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', false);
	wp_enqueue_script('wpembed', get_template_directory_uri() . '/js/wp-embed.min.js', array(), '1.0.0', false);
}

add_action('wp_enqueue_scripts', 'woodley_script_enqueue');

function woodley_theme_setup(){
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support( 'title-tag' );
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Secondary Footer Navigation' );
}

add_action('init', 'woodley_theme_setup');

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

add_option( 'site_description', '255', '', 'yes' );

?>
