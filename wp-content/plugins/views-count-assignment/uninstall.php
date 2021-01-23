<?php

/**
* Uninstall the plugin
* 
* @package ViewsCountAssignment
*/

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Delete all reference and data from database
global $wpdb;
global $table_prefix;
$table = $table_prefix.'postmeta';

$wpdb->query("DELETE FROM $table WHERE meta_key = 'post_views_count'");