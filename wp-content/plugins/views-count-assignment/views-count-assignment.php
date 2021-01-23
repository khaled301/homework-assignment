<?php

/**
* @package ViewsCountAssignment
*/

/**
* Plugin Name:       Views Count Assignment
* Plugin URI:        https://github.com/khaled301
* Description:       Displays views count for posts.
* Version:           1.0.0
* Requires at least: 5.2
* Requires PHP:      7.2
* Author:            S.A.M Khaled Hasan
* Author URI:        https://github.com/khaled301
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       views-count-assignment
* Domain Path:       /languages
*/

if( ! defined( 'ABSPATH' ) ){
    die;
}


// Handle plugin activation process
function activate() {
    count_posts_views();

    add_filter( 'manage_posts_columns', 'gt_posts_column_views');
    add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );


    // // add necessary script to single.php file
    add_or_remove_gt_set_post_view_snippet_in_single_php_or_content_single_php(
        "while ( have_posts() ) :", 
        "while ( have_posts() ) : if( function_exists('gt_set_post_view') ) {gt_set_post_view();}",
        "/single.php"
    );

    //DB flush rewrite rules
    flush_rewrite_rules();
}

// Handle plugin deactivation process
function deactivate() {

    // // remove necessary script to single.php file
    add_or_remove_gt_set_post_view_snippet_in_single_php_or_content_single_php(
        "if( function_exists('gt_set_post_view') ) {gt_set_post_view();}",
        "",
        "/single.php"
    );

    // // Backup plugin folder for accidental delete
    // backup_plugin_folder_for_accidental_delete_operation();

    //DB flush rewrite rules
    flush_rewrite_rules();
}

/**
* Below functions => gt_get_post_view(), gt_set_post_view(), gt_posts_column_views(), gt_posts_custom_column_views(),
* count_posts_views(), get_post_view_count() and show_post_view_count() 
* are handling post view count calculation and display functionalities
*/
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return $count;
}

function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}


function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}

function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}

function count_posts_views() {
    add_menu_page( 'Post View Counter', 'Post View Counter', 'manage_options', 'post_view_counter', 'show_post_view_count', null, 8 );
}


//[post_view_count] shortcode 
function get_post_view_count(){
	echo gt_get_post_view();
}


function show_post_view_count(){
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }    

    // Check if the activation is complete or not
    echo 'Welcome';
    echo get_stylesheet_directory();
}

// adding custom PHP code snippet to single or content-single PHP files
function add_or_remove_gt_set_post_view_snippet_in_single_php_or_content_single_php($search_variable, $replace_variable, $partial_path){
    // insert necessary code snippet to single.php file to track views count for posts
    $filename= get_stylesheet_directory() . $partial_path; // file name is stored
    // opening the file in read mode
    $fd = fopen ($filename, "r"); 
    // reading the content of the file
    $contents = fread ($fd, filesize($filename)); 
    // closing the file pointer
    fclose ($fd);                                
    $search=array($search_variable);
    $replace=array($replace_variable);
    $contents=str_replace($search,$replace,$contents);

    // opening the file in write mode
    $fd = fopen ($filename, "w");   
    // entering data to the file    
    fwrite ($fd,$contents);        
    fclose($fd);
    // Setting the write permission 
    chmod($filename,0777);   
}


// backup plugin folder in zip format on deactivate action to safeguard accidental delete operation
function backup_plugin_folder_for_accidental_delete_operation(){
    /**
    * Zip whole folder and Save it into wp-admin folder incase of
    * accidental delete plugin operation after deactivation
    */
    $rootPath = realpath( get_home_path() .'wp-content/plugins/views-count-assignment');

    // Initialize archive object
    $zip = new ZipArchive();
    $zip->open( get_home_path() .'wp-content/plugins/views-count-assignment.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

    // Create recursive directory iterator
    /** @var SplFileInfo[] $files */
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($rootPath),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($files as $name => $file)
    {
        // Skip directories (they would be added automatically)
        if (!$file->isDir())
        {
            // Get real and relative path for current file
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($rootPath) + 1);

            // Add current file to archive
            $zip->addFile($filePath, $relativePath);
        }
    }

    // Zip archive will be created only after closing object
    $zip->close();
}


// activation 
register_activation_hook( __FILE__, 'activate' );

// deactivation 
register_deactivation_hook( __FILE__, 'deactivate' );

// add Post View Counter in Admin menu
add_action( 'admin_menu', 'count_posts_views' );

// add shortcode to display post view count
add_shortcode( 'post_view_count', 'get_post_view_count' );
