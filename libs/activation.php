<?php 
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

 } );


register_deactivation_hook( __FILE__, function(){

	notificator_send_message('plugin Contact Widget Floating Icon Deactivated at ' . home_url() );
});