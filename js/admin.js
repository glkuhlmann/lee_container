(function($) {




$(document).ready(function() {
   
   
  
	//Change the "Link To" options on the media upload area.
	$('.media-frame-content .thumbnail, .mce-widget.mce-btn[aria-label="Edit "]').live('click',function(){
  	$('.setting .link-to option,.setting.link-to option').each(function(){
    	if($(this).attr('value') === 'post' || $(this).attr('value') === 'file'){
      	$(this).remove();
    	}
  	});
	});
	
	
	
	// menu page - Remove the menu name input and replace it with the menu name
	if($('body.not-admin').hasClass('nav-menus-php')){
		var form_value = $('#menu-name').val();
		$('.menu-name-label span').append(':');
		$('.menu-name-label').append('<span class="menu_title">'+form_value+'</span>');
	}
	
	
	
	
	
	
	
	
	
	
	

	
});








})(jQuery);












