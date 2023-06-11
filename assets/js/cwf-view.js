jQuery(document).ready(function($){

	
$('#cwf_main_icon').click(function() {
	$('#ciw_icon_box').slideToggle();
	$('#ciw_icon_box').css("display", "flex");
	$('#pshtshow').toggle();
	
});

$('#pshtshow').click(function() {
	$('#ciw_icon_box').slideToggle();
	$('#pshtshow').toggle();
	
	$('.cwf-main-icon-s-open').removeClass('cwf-rot').animate({opacity: '1'}, 300);
        $('.cwf-main-icon-s-close').addClass('cwf-rot').animate({opacity: '0'}, 300);
		$('.cwf-main-icon').attr('style', 'background-color:' + CONTACT_WIDGET_FLOATING_JS_DATA['background-color-open'] + ';');
		$("#cwf_main_titlep").html(CONTACT_WIDGET_FLOATING_JS_DATA['main-icon-title-open']);


});

$(document).ready(function() {

  $('.cwf-main-icon').click(function() {

	 if ($('.cwf-main-icon-s-open').hasClass('cwf-rot')) {	
		$('.cwf-main-icon-s-open').removeClass('cwf-rot').animate({opacity: '1'}, 300);
        $('.cwf-main-icon-s-close').addClass('cwf-rot').animate({opacity: '0'}, 300);
		$('.cwf-main-icon').attr('style', 'background-color:' + CONTACT_WIDGET_FLOATING_JS_DATA['background-color-open'] + ';');
		
		$('.cwf-main-titlep-support').toggle();
		$('.cwf-main-titlep-close').toggle();
	

		 
		
		
    } else {
			
		$('.cwf-main-icon-s-open').addClass('cwf-rot').animate({opacity: '0'}, 300);
		$('.cwf-main-icon-s-close').removeClass('cwf-rot').animate({opacity: '1'}, 300);
		$('.cwf-main-icon').attr('style', 'background-color:' + CONTACT_WIDGET_FLOATING_JS_DATA['background-color-close'] + ';');
		$('.cwf-main-titlep-support').toggle();
		$('.cwf-main-titlep-close').toggle();
		  
		
			    
	}
           	
  });
});

$(document).click(function(event) {
  var target = $(event.target);
  if (target.hasClass("cwf-main-icon-s-close")) {
    console.log("The clicked element has class 'test'");
  }
});

});


