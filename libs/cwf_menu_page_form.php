<?php 
defined( 'ABSPATH' ) || exit;
global $title;

$icons_url = CONTACT_WIDGET_FLOATING_IMAGES_URL;

$ID 		 = 0;
$widget_name = '';
$widget_tooltip = '';
$widget_icon = '';
$widget_color = '';
$widget_order = '';
$widget_link = '';
$widget_target = '';



if ($cwf_widgets) {
		$widget_ID 	= $cwf_widgets->ID;
		$widget_name 	= $cwf_widgets->widget_name;
		$widget_tooltip 	= $cwf_widgets->widget_tooltip;
		$widget_icon 	= $cwf_widgets->widget_icon;
		$widget_color   = $cwf_widgets->widget_color;
		$widget_order   = $cwf_widgets->widget_order;
		$widget_link    = $cwf_widgets->widget_link;
		$widget_target    = $cwf_widgets->widget_target;
	} 
	
?>

<h1><?php echo $widget_name ? 'Edit ' . $widget_name . ' Widget' : $title; ?></h1>


<!-- HTML فرم -->
<form action="" method="post">
	<table class="form-table">
		<tbody>
			<tr>
				<th scope="row">
					<lable for="widget_name"><?php _e('Element Name', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					<input type="text" name="widget_name" required id="widget_name" value="<?php echo esc_attr($widget_name); ?>">
				</td>	
			</tr>
			<tr>
				<th scope="row">
					<lable for="widget_tooltip"><?php _e('Element text hover (Tooltip)', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					<input type="text" name="widget_tooltip" id="widget_tooltip" value="<?php echo esc_attr($widget_tooltip); ?>">
				</td>	
			</tr>

			<tr>
				<th scope="row">
					<lable for="widget_icon"><?php _e('Element Icon', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					
		<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'facebook-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
		<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'facebook-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
		<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'home-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'home-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'instagram-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'instagram-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'link-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'link-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'location-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'location-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'love-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'love-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<br>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'mail-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'mail-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'message-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'message-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'mobile-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'mobile-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'phone-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'phone-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'pinterest-icons-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'pinterest-icons-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'power-icon-g01.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'power-icon-w01.png'; ?>" alt="" whidth="30" height="30"></div>
<br>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'search-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'search-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g01.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g02.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g03.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-g04.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w01.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w02.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w03.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'support-icon-w04.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'telegram-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'telegram-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<br>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'tiktok-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'tiktok-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'translate-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'translate-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'twitter-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'twitter-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'user-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'user-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'whatsapp-icon-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'whatsapp-icon-w.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'youtube-icons-g.png'; ?>" alt="" whidth="30" height="30"></div>
<div class="di-holder cwsi-holder"><img src="<?php echo $icons_url . 'youtube-icons-w.png'; ?>" alt="" whidth="30" height="30"></div>

					<br>
					<input type="text" name="widget_icon" id="widget_icon" value="<?php echo esc_attr($widget_icon); ?>">
					<button type="button" class="button button-secondary" id="icon-select">Add Icon</button>
					<div class="form-helper"><?php _e('40 x 40 px and transparent recommended', 'contact-widget-floating-icon') ?></div>
				</td>	
			</tr>

			<tr>
				<th scope="row">
					<lable for="widget_color"><?php _e('Element Color', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					<input type="text" name="widget_color" id="widget_color" value="<?php echo esc_attr($widget_color); ?>">
				</td>	
			</tr>

			<tr>
				<th scope="row">
					<lable for="widget_order"><?php _e('Element Order', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					<input type="number"  name="widget_order" id="widget_order" min="1" max="20" value="<?php echo esc_attr($widget_order); ?>" class="small-text">
					<div class="form-helper"><?php _e('Lower numbers are placed in higher positions', 'contact-widget-floating-icon') ?></div>
					
				</td>	
			</tr>	

			<tr>
				<th scope="row">
					<lable for="widget_link"><?php _e('Element Link', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					<input type="text" name="widget_link" id="widget_link" value="<?php echo esc_attr($widget_link); ?>">
				</td>	
			</tr>

			<tr>
				<th scope="row">
					<lable for="widget_target"><?php _e('Element Target Link', 'contact-widget-floating-icon') ?></lable>
				</th>
				<td>
					<label><input type="checkbox" name="widget_target" id="widget_target" value="1" <?php checked( $widget_target, 1 ); ?>><?php _e('Open in new window', 'contact-widget-floating-icon') ?></label>
				</td>	
			</tr>	
		</tbody>	
	</table>	


	<input type="hidden" name="ID" value="<?php echo esc_attr($widget_ID); ?>">

    <button class="button button-primary" name="save_cwf">
	<?php if($cwf_widgets) {_e('Edit Element', 'contact-widget-floating-icon');}else{_e('Add New Element', 'contact-widget-floating-icon');} ?>
	
	
	</button>
</form>
