<?php

function cwf_admin_menu_content_list(){

	global $wpdb;
	$table_cwf 		= $wpdb->prefix . 'cwf_db';
	$cwf_widgets    = $wpdb->get_results (
		"SELECT * FROM $table_cwf ORDER BY ID DESC"
	);
	include( CONTACT_WIDGET_FLOATING_LIBS . 'cwf_menu_page_list.php' );
	
}
function cwf_admin_menu_content_form(){
	
	global $wpdb;
	$table_cwf 		= $wpdb->prefix . 'cwf_db';
	$cwf_widgets = false;

	if (isset ($_GET['cwfid']) && isset ($_GET['mode'])) {
			$cwf_id = absint ($_GET['cwfid']);
			if ( $cwf_id ) {
			$cwf_widgets    = $wpdb->get_row (
			"SELECT * FROM $table_cwf WHERE ID = $cwf_id"
	);

	

		}
	}
	include( CONTACT_WIDGET_FLOATING_LIBS . 'cwf_menu_page_form.php' );
	
}
function cwf_admin_menu() {
	$list_hook_suffix = add_menu_page(
		__('Contact Widget Setting', 'contact-widget-floating-icon'),
		__('Contact Widget Setting', 'contact-widget-floating-icon'),
		'manage_options',
		'contact-widget-setting',
		'cwf_admin_menu_content_list',
		'dashicons-editor-ul'
	);

	add_action( 'load-'. $list_hook_suffix, 'cwf_delete_operation' );

	add_submenu_page(
		'contact-widget-setting',
		__('Add New Element', 'contact-widget-floating-icon'),
		__('Add New Element', 'contact-widget-floating-icon'),
		'manage_options',
		'contact-widget-add',
		'cwf_admin_menu_content_form',
		CONTACT_WIDGET_FLOATING_IMAGES_URL . 'logo.png'
	);
}

function cwf_delete_operation(){
	if( isset( $_GET['action'] ) &&  $_GET['action'] == 'delete-widget' && isset( $_GET['cwfid'] )) {
		$cwf_id = absint ($_GET['cwfid']);
		global $wpdb;
		$table_cwf  = $wpdb->prefix . 'cwf_db';
		$deleted 	= $wpdb->delete( 
			$table_cwf,
			[
				'ID' => $cwf_id
			]
		);	
		if ($deleted) {
				wp_redirect(
					admin_url ( 'admin.php?page=contact-widget-setting&cwfstatus=deleted')
				);
				exit;

		}else {
			wp_redirect(
					admin_url ( 'admin.php?page=contact-widget-setting&cwfstatus=deleted-error')
				);
				exit;

		}
	}
}
add_action( 'admin_menu', 'cwf_admin_menu' );


