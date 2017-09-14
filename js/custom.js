(function($) {









//Checks for SVG support. Returns true/false.
function supportsSVG(){
	return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', "svg").createSVGRect;
}//end svg detection

//Checks for SVG support. If there is no SVG support, the extensions will be changed to "png".
function checkSVG(){
	if(!supportsSVG()){
		$('img[src$=".svg"]').each(function(index,element) {
			element.src = element.src.replace('.svg','.png');
	    });
	    $('html').addClass('nosvg');
	}else{
		$('html').addClass('svg');
	}
}









$(document).ready(function() {
    checkSVG();
	
	
	
	
	
	
	// open external links in new tab
	$('a222').each(function() {
	   var a = new RegExp('/' + window.location.host + '/');
	   if(!a.test(this.href)) {
	       $(this).click(function(event) {
	           event.preventDefault();
	           event.stopPropagation();
	           window.open(this.href, '_blank');
	       });
	   }
	});
	

	
	
	
	$('#navBars').click(function(){
		if($('body').hasClass('home')){
			$('#nav_standard .mobile-wrapper').slideToggle();
		}else {
			$('#nav_standard .mobile-wrapper').slideToggle();
		}
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$(this).addClass('closed');
		}else{
			$(this).addClass('open');
			$(this).removeClass('closed');
		}
	});
	
	
	
	
     
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(window.location.hash && window.location.hash.length > 1) {
		
		var scrollToSection = window.location.hash.substring(1);
		
		window.location.hash = '';
		window.scrollTo(0, 0);
		
		
		var navClick = '#'+scrollToSection;
		var scrollheight = $(navClick).offset().top;
		
		var scrollDifference = $(window).scrollTop()-scrollheight;
		if(scrollDifference < 0){
			scrollDifference = (scrollDifference* (-1));
		}
		scrollDifference = Math.round(scrollDifference /3);
		if(scrollDifference < 500){
			scrollDifference = 500;
		}
		if(scrollDifference > 3000){
			scrollDifference =  Math.round(scrollDifference /5);
		}
		
		$('html, body').animate({scrollTop:scrollheight},scrollDifference ,function(){
			/*
			if($('body').height() - scrollheight - $(window).height() < 0){
				$(navClick).addClass('tooFar').delay(500).queue(function(){
					$(navClick).removeClass('tooFar');
					$(this).dequeue();
				});
			}
			*/
			$(navClick).addClass('tooFar').delay(500).queue(function(){
				$(navClick).removeClass('tooFar');
				$(this).dequeue();
			});
		});
		
	}

	
	
	
	
	
	
	
	
	
	//Scroll to correct place on that page.
  $(document).on('click','.scrollLink,.scrollLink a',function(event){
    //$('html').removeClass('nav_open');
	$('#get_to_top').removeAttr('style');
    
    var is_sub_nav_bar;
    if($(this).closest('#menu-main-menu').length > 0){
      is_sub_nav_bar = true;
    }else{
      is_sub_nav_bar = false;
    }
  
    if($(this).attr('href')){
      var navClick = $(this).attr('href');
      var i = navClick.indexOf("#");
  
      if (i !== -1) {
        navClick = navClick.substring(i, navClick.length);
      }
  
      if($(navClick).length){
        //on this page.
        if(event.preventDefault){
          event.preventDefault();
        }else{
          event.returnValue = false;
        }
      }else{
        //not on this page.
      }
  
  
      var scrollheight = $(navClick).offset().top;
      var scrollDifference = $(window).scrollTop()-scrollheight;
  
  
  
      if(scrollDifference < 0){
        scrollDifference = (scrollDifference* (-1));
      }
  
      scrollDifference = Math.round(scrollDifference /3);
  
      if(scrollDifference < 500){
        scrollDifference = 500;
      }
  
      if(scrollDifference > 3000){
        scrollDifference =  Math.round(scrollDifference /5);
      }
      if(is_sub_nav_bar && $(window).width()>767){
        scrollheight = scrollheight;
      }
      
  
      $('html, body').animate({scrollTop:scrollheight},scrollDifference,function(){
        $(navClick).addClass('tooFar').delay(500).queue(function(){
          $(navClick).removeClass('tooFar');
          $(this).dequeue();
        });
      });
    }
  
  
  });
	
	
	

  
  
  $( '.swipebox' ).swipebox({
	  hideBarsDelay : false,
  });
	
	
	$('#testimonials').slick({
	  dots: true
  });
  
  $('#home_slides').slick({
	fade: true,
	//autoplay: true,
  });
	
	
});














//-------------------------------------------------------------------------------------------
$(window).resize(function() {
	
	
	
	
	if($(window).width() > 767){
		$('#nav_standard .mobile-wrapper').removeAttr('style');
		$('#navBars').removeAttr('class');
	}else if($(window).width() < 768) {
		//$('#navigation').removeAttr('style');
	}
	
});


	

	
	

//@codekit-append "modules/scrolled.js";
	
//codekit-append "modules/background-scrollable.js";


//@codekit-append "modules/conformer.js";
//@codekit-append "modules/conformer-called.js";






$(window).bind("load", function() {
	
});

























})(jQuery);