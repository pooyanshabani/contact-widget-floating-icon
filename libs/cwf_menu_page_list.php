<?php 
defined( 'ABSPATH' ) || exit;

global $title;

?>
<h1><?php echo $title; ?></h1>
<?php include( CONTACT_WIDGET_FLOATING_LIBS . 'cwf_menu_page_list_setting.php' ); ?>
<h2><?php _e('Element(s)', 'contact-widget-floating-icon')?></h2>
<div class="wrap">
<p><a href="<?php echo admin_url ( 'admin.php?page=contact-widget-add' ); ?>" class="button button-secondary">
<?php _e('Add new element', 'contact-widget-floating-icon')?></a></p>
<table class="widefat">
	<thead>
		<th><?php _e('Name', 'contact-widget-floating-icon')?></th>
		<th><?php _e('Icon', 'contact-widget-floating-icon')?></th>
		
		<th><?php _e('Tooltip', 'contact-widget-floating-icon')?></th>
		
		<th><?php _e('Color', 'contact-widget-floating-icon')?></th>
		<th><?php _e('Order', 'contact-widget-floating-icon')?></th>
		<th><?php _e('Target', 'contact-widget-floating-icon')?></th>
		<th><?php _e('Link', 'contact-widget-floating-icon')?></th>
		<th><?php _e('Operations', 'contact-widget-floating-icon')?></th>
		
	</thead>

	<tbody>
	<?php if ($cwf_widgets):?>
		<?php foreach($cwf_widgets as $widget): ?>

		<tr>
			<th scope="row"><?php echo $widget->widget_name; ?></th>
			<td>
				
				<div class="cwsi-table-holer-prev" style="background:<?php echo $widget->widget_color; ?>"><img src="<?php echo $widget->widget_icon; ?>" alt="" whidth="30" height="30"></div>
				
			</td>
			<td class="cwsht-table-holer-prev"><p style="background: <?php echo $giw_hbgcolor; ?>; color: <?php echo $giw_htxtcolor; ?>;border:1px solid <?php echo $giw_hbordercolor; ?>;"><?php echo $widget->widget_tooltip; ?></p></td>
			
			<td><?php echo $widget->widget_color; ?></td>
			<td><?php echo $widget->widget_order; ?></td>
			<td><?php if($widget->widget_target){ echo 'New Tab';} else {echo 'Self';} ?></td>
			<td class="ltr"><?php echo $widget->widget_link; ?></td>
			<td class="cwsht-opration-table">
			
			<a href="<?php echo admin_url ( 'admin.php?page=contact-widget-add&mode=edit&cwfid=' . $widget->ID ); ?>" >
				<span class="dashicons dashicons-edit"></span>
				</a>

				<a href="<?php echo admin_url ( 'admin.php?page=contact-widget-setting&action=delete-widget&cwfid=' . $widget->ID ); ?>" onclick="return confirm('Are you sure you want to delete <?php echo $widget->widget_name; ?> ?');">
			<span class="dashicons dashicons-trash"></span></a>
			</td>
		</tr>

		<?php endforeach;?>
		

	<?php else:?>
		<tr>
			<td colspan=8><?php _e('No Result Found', 'contact-widget-floating-icon')?></td>
		</tr>
	<?php endif;?>
	</tbody>

</table>


</div>