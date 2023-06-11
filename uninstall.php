<?php

if( ! defined( 'WP_UNINSTALL_PLUGIN' )) {
	exit();
}

global $wpdb;
$table_cwf 		= $wpdb->prefix . 'cwf_db';
$option  = 

$wpdb->query( "DROP TABLE IF EXISTS $table_cwf" );
delete_option( 'cwf_setting_data' );
