<?php

function cwf_show_icon(){
	$icons_url = CONTACT_WIDGET_FLOATING_IMAGES_URL;
	$banner_link = 'https://pooyan-shabani.ir';

	global $wpdb;
	$table_cwf 		= $wpdb->prefix . 'cwf_db';
	$cwf_widgets    = $wpdb->get_results (
		"SELECT * FROM $table_cwf ORDER BY ID DESC"
	);

	$settingsie = get_option('cwf_setting_data');	

	if($settingsie){

	$siw_icon = $settingsie['siw_icon'];
	$siw_text = $settingsie['siw_text'];
	$siw_hover = $settingsie['siw_hover'];
	$ciw_text =$settingsie['ciw_text'];
	$ciw_icon = $settingsie['ciw_icon'];
	$ciw_hover = $settingsie['ciw_hover'];
	$giw_showhover = $settingsie['giw_showhover'];
	$giw_hborderhover = $settingsie['giw_hborderhover'];
	$miw_pos = $settingsie['miw_pos'];
	$miw_mobview = $settingsie['miw_mobview'];
	$miw_pages = $settingsie['miw_pages'];

	}	

			
		if ($settingsie && $miw_pages == 0 || $miw_pages == 1 && is_front_page()) {

		
			?>

			
	<div class="cwf-main-box <?php  if ($miw_mobview): echo 'cwf-main-mb'; endif; if ($miw_pos): echo 'cwf-rtl'; endif;?>" >
	
		<div class="ciw-icon-box" id="ciw_icon_box">
		<?php foreach($cwf_widgets as $widget): ?>
			
			<div class="ciw-icon-box-fe <?php  if ($miw_pos): echo 'cwf-fdrr'; endif;?>" style="order: <?php echo $widget->widget_order; ?>">
				<div class="ciw-icon <?php  if ($miw_pos): echo 'cwf-fdrr'; endif;?>">
					<a href="<?php echo $widget->widget_link; ?>"<?php  if ($widget->widget_target): echo 'target="_blank"'; endif;?>><img style="background: <?php echo $widget->widget_color; ?>;"src="<?php echo $widget->widget_icon; ?>" alt="" whidth="30" height="30"></a>
					<?php if(! $giw_showhover):?>
					<div class="ciw-hover" <?php  if ($giw_hborderhover): echo 'style="border: none;"'; endif;?>><p><?php echo $widget->widget_tooltip; ?></div>
					<?php endif ?>
				</div>
			</div>

		<?php endforeach;?>	
			

		</div>
			<div class="cwf-main-icon-box <?php  if ($ciw_hover || $siw_hover): echo 'cwf-chccccccccc'; endif;  if ($miw_pos): echo 'cwf-fdrr'; endif;?>" id="cwf_main_icon_box">	
				<div class="cwf-main-icon" id="cwf_main_icon">
					<span class="cwf-main-icon-s-open" id="cwf_main_icon_open">
					<img src="<?php echo $siw_icon; ?>" alt="" whidth="30" height="30">
					</span>
					<span class="cwf-main-icon-s-close cwf-rot" id="cwf_main_icon_close">
					<img src="<?php echo $ciw_icon; ?>" alt="" whidth="30" height="30">
					</span>
				</div>

				<div class="cwf-main-title" id="cwf_main_title">
					<?php if (! $siw_hover) {?><p class="cwf-main-titlep-support" <?php  if ($giw_hborderhover): echo 'style="border: none;"'; endif;?> id="cwf_main_titlep"><?php echo $siw_text; ?></p><?php }
						  if (! $ciw_hover) {?><p class="cwf-main-titlep-close" <?php  if ($giw_hborderhover): echo 'style="border: none;"'; endif;?> id="cwf_main_titlep"><?php echo $ciw_text; ?></p><?php }?>
				</div>
				
				
			
			</div>		
	</div>

	<div class="pshtshow" id="pshtshow"> </div>
	<?php
}
		}
