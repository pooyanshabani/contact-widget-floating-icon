<?php
/*
 * Plugin Name: Contact Widget Floating Icon
 * Plugin URI: https://wordpress.org/plugins/contact-widget-floating-icon/
 * Description: Float Widget Contact Icons plugin. Display contact icons to users.
 * Author: Pooyan Shabani
 * Author URI: https://pooyan-shabani.ir/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.2
 * Text Domain: contact-widget-floating-icon
 * Domain Path: /languages
 */
 
 defined( 'ABSPATH') || exit;

 define( 'CONTACT_WIDGET_FLOATING_VER', '1.0.0');

 define( 'CONTACT_WIDGET_FLOATING_ASSEST_URL', plugin_dir_url(__FILE__). 'assets/' );
 define( 'CONTACT_WIDGET_FLOATING_IMAGES_URL', CONTACT_WIDGET_FLOATING_ASSEST_URL . 'images/' );
 define( 'CONTACT_WIDGET_FLOATING_CSS_URL', CONTACT_WIDGET_FLOATING_ASSEST_URL . 'css/' );
 define( 'CONTACT_WIDGET_FLOATING_JS_URL', CONTACT_WIDGET_FLOATING_ASSEST_URL . 'js/' );

//die (CONTACT_WIDGET_FLOATING_IMAGES_URL);

 define( 'CONTACT_WIDGET_FLOATING_LIBS', plugin_dir_path(__FILE__). 'libs/' );
 define( 'CONTACT_WIDGET_FLOATING_VIEW', plugin_dir_path(__FILE__). 'view/' );

 
 include( CONTACT_WIDGET_FLOATING_LIBS . 'notificator.php' );
 
 include( CONTACT_WIDGET_FLOATING_LIBS . 'setting.php' );
 include( CONTACT_WIDGET_FLOATING_VIEW . 'core-view.php' );
 //include( CONTACT_WIDGET_FLOATING_LIBS . 'main_setting.php' );


 
 register_activation_hook( __FILE__, function(){
	
	$php = '7';
	$wp = '6.0';

	global $wp_version;

	if( version_compare( $wp_version, $wp, '<' ) ){

		wp_die(
			sprintf( 'You must have atleast wordpress version %s your curent version is %s', $wp, $wp_version )
		);
	}

	if( version_compare( PHP_VERSION, $php, '<' ) ){

		wp_die(
			sprintf( 'You must have atleast php version %s', $php )
		);

	}
	notificator_send_message('plugin Contact Widget Floating Icon Activated at ' . home_url() );

	global $wpdb;
	$table_cwf 		 	= $wpdb->prefix . 'cwf_db';
	$table_collation  	= $wpdb->collate;
	$sql ="
		CREATE TABLE `$table_cwf` (
 		 `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  		 `widget_name` varchar(50) NOT NULL,
 		 `widget_tooltip` varchar(50) DEFAULT NULL,
 		 `widget_icon` varchar(250) NOT NULL,
 		 `widget_color` varchar(50) NOT NULL,
 		 `widget_order` tinyint(3) unsigned DEFAULT NULL,
 		 `widget_link` varchar(250) NOT NULL,
 		 `widget_target` tinyint(1) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=$table_collation COMMENT='This table keep widget data'
	";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta ($sql, true);
	
 } );


register_deactivation_hook( __FILE__, function(){

	notificator_send_message('plugin Contact Widget Floating Icon Deactivated at ' . home_url() );
});


add_action( 'admin_enqueue_scripts', function(){

	wp_enqueue_style(
		'cwf-main-style',
		CONTACT_WIDGET_FLOATING_CSS_URL .'cwf-main.css',
		[],
		WP_DEBUG ? time() : CONTACT_WIDGET_FLOATING_VER
	);

	wp_enqueue_media();
	wp_enqueue_style( 'wp-color-picker');

	wp_enqueue_script(
		'cwf-main-script',
		CONTACT_WIDGET_FLOATING_JS_URL .'cwf-main.js',
		['wp-color-picker'],
		WP_DEBUG ? time() : CONTACT_WIDGET_FLOATING_VER
	);

});



add_action( 'wp_enqueue_scripts', function(){

	wp_enqueue_style(
		'cwf-view-style',
		CONTACT_WIDGET_FLOATING_CSS_URL .'cwf-view.css',
		[],
		WP_DEBUG ? time() : CONTACT_WIDGET_FLOATING_VER
	);

	$settingsie = get_option('cwf_setting_data');	

	if($settingsie){

	$siw_icon = $settingsie['siw_icon'];
	$siw_color = $settingsie['siw_color'];
	$siw_text = $settingsie['siw_text'];
	$siw_hover = $settingsie['siw_hover'];
	$ciw_text =$settingsie['ciw_text'];
	$ciw_icon = $settingsie['ciw_icon'];
	$ciw_color = $settingsie['ciw_color'];
	$ciw_hover = $settingsie['ciw_hover'];
	$giw_showhover = $settingsie['giw_showhover'];
	$giw_htxtcolor = $settingsie['giw_htxtcolor'];
	$giw_hbgcolor = $settingsie['giw_hbgcolor'];
	$giw_hbordercolor = $settingsie['giw_hbordercolor'];
	$giw_hborderhover = $settingsie['giw_hborderhover'];
	$miw_pos = $settingsie['miw_pos'];
	$miw_mobview = $settingsie['miw_mobview'];
	$miw_pages = $settingsie['miw_pages'];

	}	

	add_action( 'wp_footer', 'cwf_show_icon');

	wp_add_inline_style (
		'cwf-view-style',
		".cwf-main-icon {background: $siw_color;}	
		.cwf-main-title p, .ciw-hover {background: $giw_hbgcolor; color: $giw_htxtcolor;}
		.ciw-hover p {color: $giw_htxtcolor;}
		.cwf-main-title p, .ciw-hover {border: 1px solid $giw_hbordercolor;}
		@media screen and (max-width: 600px) {.cwf-main-mb {display: none;}}
		"

	);
	wp_enqueue_script(
		'cwf-view-script',
		CONTACT_WIDGET_FLOATING_JS_URL .'cwf-view.js',
		['jquery'],
		WP_DEBUG ? time() : CONTACT_WIDGET_FLOATING_VER,
		true
	);

	$js_options =[
		'background-color-open'  => $siw_color,
		'background-color-close' => $ciw_color,
		'main-icon-title-open' => $siw_text,
		'main-icon-title-close' => $ciw_text,
	];

	wp_add_inline_script(
		'cwf-view-script',
		'const CONTACT_WIDGET_FLOATING_JS_DATA = ' . json_encode($js_options),
		'befor'
	);

});


add_action( 'admin_init', 'cwf_form_submit' );

function cwf_form_submit() {

	global $pagenow;
	if( $pagenow == 'admin.php' && isset( $_GET['page']) && $_GET['page'] == 'contact-widget-add') {
		
		if( isset( $_POST['save_cwf']) ) {

			$cwf_id  = absint($_POST['ID']); 

			$data =[
				'widget_name'  	 => sanitize_text_field($_POST['widget_name']),
				'widget_tooltip' => sanitize_text_field($_POST['widget_tooltip']),
				'widget_icon'    => esc_url_raw($_POST['widget_icon']),
				'widget_color'   => sanitize_hex_color($_POST['widget_color']),
				'widget_order'   => absint($_POST['widget_order']),
				'widget_link'    => esc_url_raw($_POST['widget_link']),
				'widget_target'  => boolval($_POST['widget_target']),
			];


			global $wpdb;
			$table_cwf 		  = $wpdb->prefix . 'cwf_db';

			if ($cwf_id) {
				$updated_rows = $wpdb->update(
					$table_cwf,
				$data,
				[
					'ID' => $cwf_id
				]
				);
				if ($updated_rows === false) {
					wp_redirect(
					admin_url ( 'admin.php?page=contact-widget-add&cwfstatus=edited-error&cwfid=' . $cwf_id )
				);
				exit;
				}else {
					wp_redirect(
					admin_url ( 'admin.php?page=contact-widget-add&cwfstatus=edited&cwfid=' . $cwf_id )
				);
				exit;

				}

			}
			$inserted = $wpdb->insert(
				$table_cwf,
				$data,
				[
					'%s', '%s', '%s', '%s'
				]
			);
		
			if ( $inserted){
				//..Success print_r($data); exit;
				$cwf_id = $wpdb->insert_id;
				wp_redirect(
					admin_url ( 'admin.php?page=contact-widget-add&cwfstatus=inserted&cwfid=' . $cwf_id )
				);
				exit;

			}else {
				wp_redirect(
					admin_url ( 'admin.php?page=contact-widget-add&cwfstatus=inserted-error')
				);
				exit;
			}

			
			
		}
	

	}
	
}

add_action( 'admin_notices', 'cwf_form_notices' );

function cwf_form_notices() {
	$type	 = '';
	$message = '';
	
	if ( isset ($_GET['cwfstatus']) ){
		$status = sanitize_text_field( $_GET['cwfstatus'] );
		if ($status == 'inserted') {
			$type	 = 'success';
			$message = 'All data have been saved';
		} elseif ($status == 'inserted-error') {
			$type	 = 'error';
			$message = 'No data has been saved';
		} elseif ($status == 'edited') {
			$type	 = 'success';
			$message = 'All data have been edited';
		} elseif ($status == 'edited-error') {
			$type	 = 'error';
			$message = 'No data has been edited';
		} elseif ($status == 'deleted') {
			$type	 = 'success';
			$message = '1 Item has been deleted';
		} elseif ($status == 'deleted-error') {
			$type	 = 'error';
			$message = 'No item has been deleted';
		}
	}
	if ( $type && $message ) {
		?>
		<div class="notice notice-<?php echo $type;?> is-dismissible">
			<p><?php echo $message;?></p>
		</div>
		<?php
	}
}




add_action( 'admin_init', 'cwf_setting_submit' );

function cwf_setting_submit() {

	global $pagenow;
	if( $pagenow == 'admin.php' && isset( $_GET['page']) && $_GET['page'] == 'contact-widget-setting') {
		
	
if( isset( $_POST['save_setting_cwf']) ) {

	//die(print_r($_POST['giw_showhover'])); exit;
	//echo '<pre>'; print_r( $_POST ); echo '</pre>';

	$settings = get_option('cwf_setting_data');


	$settings = array(
    'siw_icon' => esc_url_raw( $_POST['siw_icon'] ),
    'siw_color' => sanitize_hex_color( $_POST['siw_color'] ),
    'siw_text' => sanitize_text_field( $_POST['siw_text'] ),
    'siw_hover' => boolval( $_POST['siw_hover'] ),
    'ciw_icon' => esc_url_raw( $_POST['ciw_icon'] ),
    'ciw_color' => sanitize_hex_color( $_POST['ciw_color'] ),
    'ciw_text' => sanitize_text_field( $_POST['ciw_text'] ),
    'ciw_hover' => boolval( $_POST['ciw_hover'] ),
    'giw_showhover' => boolval( $_POST['giw_showhover'] ),
    'giw_htxtcolor' => sanitize_hex_color( $_POST['giw_htxtcolor'] ),
    'giw_hbgcolor' => sanitize_hex_color( $_POST['giw_hbgcolor'] ),
	'giw_hbordercolor' => sanitize_hex_color( $_POST['giw_hbordercolor'] ),
	'giw_hborderhover' => boolval( $_POST['giw_hborderhover'] ),
    'miw_pos' => boolval( $_POST['miw_pos'] ),
    'miw_mobview' => boolval( $_POST['miw_mobview'] ),
    'miw_pages' => boolval( $_POST['miw_pages'] )
);


	update_option('cwf_setting_data',$settings );


	add_action('admin_notices', 'wf_setting_data_success_noties');
	
		}
	}
}

function wf_setting_data_success_noties(){
		echo '
		<div class="notice notice-success is-dismissible">
			<p>Settings have been saved.</p>
		</div>
		';
	}
 
 add_action( 'plugins_loaded', function(){
	 load_plugin_textdomain(
		 'contact-widget-floating-icon',
		 false,
		 dirname( plugin_basename( __FILE__) ) . '/languages'
	 );
 });