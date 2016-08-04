<?php 
if(! function_exists('biwas_setup')):

function biwas_setup(){
load_theme_textdomain('biwas', get_template_directory() . '/languages' );
add_theme_support('post-thumbnails');
  register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'biwas' ),
        'secondary' => __('Secondary Menu', 'biwas' )
    ) );
add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif;
add_action('after_setup_theme','biwas_setup');


function theme_style_enqueue(){
	wp_enqueue_style( 'biwas-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array());
	wp_enqueue_style('component', get_template_directory_uri(). '/css/component.css', array());
	wp_enqueue_style('font-awesome', get_template_directory_uri(). '/css/font-awesome.min.css', array());
	wp_enqueue_style('font-awesome-animation', get_template_directory_uri(). '/css/font-awesome-animation.css', array());
	wp_enqueue_style('vegas', get_template_directory_uri(). '/css/jquery.vegas.min.css', array());
	wp_enqueue_style('open-sans','http://fonts.googleapis.com/css?family=Open+Sans',array());
}

add_action('wp_enqueue_scripts','theme_style_enqueue');

function theme_script_enqueue(){
	wp_enqueue_script( 'bootstrap',get_template_directory_uri(). '/js/bootstrap.js', array( 'jquery' ));
	wp_enqueue_script( 'classie',get_template_directory_uri(). '/js/classie.js', array( 'jquery' ));
	wp_enqueue_script( 'custom',get_template_directory_uri(). '/js/custom.js', array( 'jquery' ));
	wp_enqueue_script( 'modernizer',get_template_directory_uri(). '/js/modernizr.custom.js', array( 'jquery' ));
	wp_enqueue_script( 'vegas',get_template_directory_uri(). '/js/jquery.vegas.min.js', array( 'jquery' ));
	wp_localize_script('custom','dir',get_template_directory_uri().'/');
}
add_action('wp_enqueue_scripts','theme_script_enqueue');