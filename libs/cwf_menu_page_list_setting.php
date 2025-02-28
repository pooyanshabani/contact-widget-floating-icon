<?php 
defined( 'ABSPATH' ) || exit;


$icons_url = CONTACT_WIDGET_FLOATING_IMAGES_URL;

$siw_icon = $icons_url . 'support-icon-w01.png';
$siw_color = '#dd3333';
$siw_text = __('Support', 'contact-widget-floating-icon');
$siw_hover = false;
$ciw_text = __('Close', 'contact-widget-floating-icon');
$ciw_icon = $icons_url . 'close-icon-w01.png';
$ciw_color = '#3a3a3a';
$ciw_hover = false;
$giw_showhover = false;
$giw_htxtcolor = '#3a3a3a';
$giw_hbgcolor = '#f4f4f4';
$giw_hbordercolor = '#cecece';
$giw_hborderhover = false;
$miw_pos = false;
$miw_mobview = false;
$miw_pages = false;

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

	
?>

<h2><?php _e('Widget Seting', 'contact-widget-floating-icon'); ?></h2>


<!-- HTML  -->
<form action="" method="post">
	<section class="cwf-main-section">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
					<lable><?php _e('Main Icon Setting', 'contact-widget-floating-icon'); ?></lable>
					<br><br>
					<div class="cwsi-holer-prev" style="background:<?php echo esc_attr($siw_color); ?>"><img src="<?php echo esc_attr($siw_icon); ?>" alt="" whidth="30" height="30"></div>
					</th>
					<td>
					
					<lable><?php _e('Select or upload an icon for main widget', 'contact-widget-floating-icon'); ?></lable>
					<br><br>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w01.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g01.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w02.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g02.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w03.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g03.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w04.png'; ?>" alt="" whidth="30" height="30"></div>
					<div class="midi-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g04.png'; ?>" alt="" whidth="30" height="30"></div>
					<br><br>
					<input type="text" name="siw_icon" id="siw_icon" value="<?php echo esc_attr($siw_icon); ?>">
					<button type="button" class="button button-secondary" id="siw_icon-select">Add Icon</button>
					<div class="form-helper"><?php _e('30 x 30 px and transparent recommended', 'contact-widget-floating-icon')?></div>
					<br>

					<lable for="siw_color"><?php _e('main widget background color', 'contact-widget-floating-icon')?></lable>
					<br>
					<input type="text" name="siw_color" id="siw_color" value="<?php echo esc_attr($siw_color); ?>">
					<br><br>
					<lable for="siw_text"><?php _e('main widget text hover (tooltip)', 'contact-widget-floating-icon')?></lable>
					<br>
					<input type="text" name="siw_text" id="siw_text" value="<?php echo esc_attr($siw_text); ?>">
					<br><br>
					<label><input type="checkbox" name="siw_hover" id="siw_hover" value="1" <?php checked( $siw_hover, 1 ); ?>><?php _e('Disable Tooltip', 'contact-widget-floating-icon')?></label>
					</td>
				</tr>
			</tbody>
		</table>
	</section>	
	<section class="cwf-main-section">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<lable><?php _e('Close Icon Setting', 'contact-widget-floating-icon')?></lable>
						<br><br>
						<div class="cwsi-holer-prev" style="background:<?php echo esc_attr($ciw_color); ?>"><img src="<?php echo esc_attr($ciw_icon); ?>" alt="" whidth="30" height="30"></div>
						</th>
						<td>
						
						<lable><?php _e('Select or upload icon for close widget', 'contact-widget-floating-icon')?></lable>
						<br><br>
						<div class="cidi-holder cwsi-holder"><img src="<?php echo $icons_url . 'close-icon-w01.png'; ?>" alt="" whidth="30" height="30"></div>
						<div class="cidi-holder cwsi-holder"><img src="<?php echo $icons_url . 'close-icon-g01.png'; ?>" alt="" whidth="30" height="30"></div>
						<div class="cidi-holder cwsi-holder"><img src="<?php echo $icons_url . 'power-icon-w01.png'; ?>" alt="" whidth="30" height="30"></div>
						<div class="cidi-holder cwsi-holder"><img src="<?php echo $icons_url . 'power-icon-g01.png'; ?>" alt="" whidth="30" height="30"></div>
						<br><br>
						<input type="text" name="ciw_icon" id="ciw_icon" value="<?php echo esc_attr($ciw_icon); ?>">
						<button type="button" class="button button-secondary" id="ciw_icon-select"><?php _e('Add Icon', 'contact-widget-floating-icon')?></button>
						<div class="form-helper"><?php _e('30 x 30 px and transparent recommended', 'contact-widget-floating-icon')?></div>
						<br>
	
						<lable for="ciw_color"><?php _e('close widget background color', 'contact-widget-floating-icon')?></lable>
						<br>
						<input type="text" name="ciw_color" id="ciw_color" value="<?php echo esc_attr($ciw_color); ?>">
						<br><br>
						<lable for="ciw_text"><?php _e('close widget text hover (tooltip)', 'contact-widget-floating-icon')?></lable>
						<br>
						<input type="text" name="ciw_text" id="ciw_text" value="<?php echo esc_attr($ciw_text); ?>">
						<br><br>
						<label><input type="checkbox" name="ciw_hover" id="siw_hover" value="1" <?php checked( $ciw_hover, 1 ); ?>><?php _e('Disable Tooltip', 'contact-widget-floating-icon')?></label>
					</td>
				</tr>
			</tbody>
		</table>
	</section>	

	<section class="cwf-main-section">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<lable><?php _e('Tooltip Setting', 'contact-widget-floating-icon')?></lable>
						<br><br>
						
						<div class="cwh-holer-prev" style="background:<?php echo esc_attr($giw_hbgcolor); ?>; color:<?php echo esc_attr($giw_htxtcolor); ?>; border: 1px solid <?php echo esc_attr($giw_hbordercolor); ?>;<?php if ($giw_hborderhover): echo 'border: none;'; endif; ?>"><p><?php _e('Tooltip', 'contact-widget-floating-icon')?></p></div>
						</th>
						<td>
						<lable for="giw_hbgcolor"><?php _e('Tooltip background color', 'contact-widget-floating-icon')?></lable>
						<br>
						<input type="text" name="giw_hbgcolor" id="giw_hbgcolor" value="<?php echo esc_attr($giw_hbgcolor); ?>">
						<br><br>
						<lable for="giw_htxtcolor"><?php _e('Tooltip text color', 'contact-widget-floating-icon')?></lable>
						<br>
						<input type="text" name="giw_htxtcolor" id="giw_htxtcolor" value="<?php echo esc_attr($giw_htxtcolor); ?>">
						<br><br>
						<label><input type="checkbox" name="giw_hborderhover" id="giw_hborderhover" value="1"<?php checked( $giw_hborderhover, 1 ); ?>><?php _e('Disable Tooltip Border', 'contact-widget-floating-icon')?></label><br><br>
						<lable for="giw_hbordercolor"><?php _e('Tooltip border color', 'contact-widget-floating-icon')?></lable>
						<br>
						<input type="text" name="giw_hbordercolor" id="giw_hbordercolor" value="<?php echo esc_attr($giw_hbordercolor); ?>">
						<br><br>
						<label><input type="checkbox" name="giw_showhover" id="giw_showhover" value="1"<?php checked( $giw_showhover, 1 ); ?>><?php _e('Disable Tooltip', 'contact-widget-floating-icon')?></label>
					</td>
				</tr>
			</tbody>
		</table>
	</section>	

	<section class="cwf-main-section">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<lable><?php _e('View Setting', 'contact-widget-floating-icon')?></lable>
	
						</th>
						<td>
						<label><input type="checkbox" name="miw_pos" id="miw_pos" value="1" <?php checked( $miw_pos, 1 ); ?>><?php _e('Move to the right (default it is left side)', 'contact-widget-floating-icon')?></label>
						<br><br>
						<label><input type="checkbox" name="miw_pages" id="miw_pages" value="1" <?php checked( $miw_pages, 1 ); ?>><?php _e('Disable on all of site (show only home page)', 'contact-widget-floating-icon')?></label>
						<br><br>
						<label><input type="checkbox" name="miw_mobview" id="miw_mobview" value="1" <?php checked( $miw_mobview, 1 ); ?>><?php _e('Disable on mobile (show only desktop view)', 'contact-widget-floating-icon')?></label>
						
	
						</td>
				</tr>
			</tbody>
		</table>
	</section>	
	<input type="hidden" name="ID" value="<?php echo esc_attr($widget_ID); ?>">

    	<button class="button button-primary" name="save_setting_cwf">
		<?php _e('Save setting', 'contact-widget-floating-icon')?>
	</button>
</form>

