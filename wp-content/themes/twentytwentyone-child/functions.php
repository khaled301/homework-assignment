<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {exit;}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
           { $uri = get_template_directory_uri() . '/rtl.css';}
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
// function themeslug_enqueue_script() {
//     wp_enqueue_script( 'jquery-v-2', 'http://code.jquery.com/jquery-2.1.3.min.js', false );
//     wp_enqueue_script( 'mycustomJs', 'file_name.js', false );
//     // here you can enqueue more js / css files 
// }

// add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

function my_scripts_method() {

    wp_enqueue_style( 'style_name_01', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'style_name_02', get_stylesheet_directory_uri() . '/assets/css/swiper.css' );
    wp_enqueue_style( 'style_name_03', get_stylesheet_directory_uri() . '/assets/css/dark.css' );
    wp_enqueue_style( 'style_name_04', get_stylesheet_directory_uri() . '/assets/css/font-icons.css' );
    wp_enqueue_style( 'style_name_05', get_stylesheet_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'style_name_06', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'style_name_07', get_stylesheet_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'style_name_08', get_stylesheet_directory_uri() . '/assets/css/colors.css' );
    wp_enqueue_style( 'style_name_09', get_stylesheet_directory_uri() . '/assets/css/custom.css' );

    wp_enqueue_script(
        'custom_jquery',
        get_stylesheet_directory_uri() . '/assets/js/jquery.js',
        array('jquery')
    );
    wp_enqueue_script(
        'custom_jquery_migrate',
        get_stylesheet_directory_uri() . '/assets/js/jquery-migrate-1.4.1.min.js',
        array('jquery')
    );
    wp_enqueue_script(
        'custom_plugin',
        get_stylesheet_directory_uri() . '/assets/js/plugins.js'
    );
    wp_enqueue_script(
        'custom_function',
        get_stylesheet_directory_uri() . '/assets/js/functions.js'
    );
    wp_enqueue_script(
        'custom_main',
        get_stylesheet_directory_uri() . '/assets/js/main.js'
    );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');