jQuery(document).ready(function($) {

  $('#widget_color').wpColorPicker({
	  defaultColor: '#0089ff',
	  hide: true
  });

  $('#ciw_color').wpColorPicker({
	  defaultColor: '#0089ff',
	  hide: true
  });

  $('#siw_color').wpColorPicker({
	  defaultColor: '#0089ff',
	  hide: true
  });

  $('#giw_hbgcolor').wpColorPicker({
	  defaultColor: '#0089ff',
	  hide: true
  });

  $('#giw_htxtcolor').wpColorPicker({
	  defaultColor: '#0089ff',
	  hide: true
  });

  $('#giw_hbordercolor').wpColorPicker({
	  defaultColor: '#0089ff',
	  hide: true
  });


	$(".di-holder").click(function() {
    var imgSrc = $(this).find("img").attr("src");
	$('#widget_icon').val(imgSrc)
    });

	$(".midi-holder").click(function() {
    var imgSrc = $(this).find("img").attr("src");
	$('#siw_icon').val(imgSrc)
    });

	$(".cidi-holder").click(function() {
    var imgSrc = $(this).find("img").attr("src");
	$('#ciw_icon').val(imgSrc)
    });

  var background_uploader;

  $('#icon-select').click(function(){
	  	
		  if( background_uploader !== undefined) {
			  background_uploader.open();
			  return;
		  }
		  background_uploader = wp.media({
			  title:'Select File',
			  library: {
				  type: 'image'
			  }
		

	  });
	  background_uploader.on('select', function(){
		  let selected =  background_uploader.state().get('selection');
		  $('#widget_icon').val(selected.first().toJSON().url)

	  });
	  background_uploader.open();

 	 });

	  var background_uploader_siw;


	    $('#siw_icon-select').click(function(){
	  	
		  if( background_uploader_siw !== undefined) {
			  background_uploader_siw.open();
			  return;
		  }
		  background_uploader_siw = wp.media({
			  title:'Select File',
			  library: {
				  type: 'image'
			  }
		

	  });
	  background_uploader_siw.on('select', function(){
		  let selected =  background_uploader_siw.state().get('selection');
		  $('#siw_icon').val(selected.first().toJSON().url)

	  });
	  background_uploader_siw.open();

 	 });


	  var background_uploader_ciw;
	

	$('#ciw_icon-select').click(function(){
	  	
		  if( background_uploader_ciw !== undefined) {
			  background_uploader_ciw.open();
			  return;
		  }
		  background_uploader_ciw = wp.media({
			  title:'Select File',
			  library: {
				  type: 'image'
			  }
		

	  });
	  background_uploader_ciw.on('select', function(){
		  let selected =  background_uploader_ciw.state().get('selection');
		  $('#ciw_icon').val(selected.first().toJSON().url)

	  });
	  background_uploader_ciw.open();

 	 });

  });
