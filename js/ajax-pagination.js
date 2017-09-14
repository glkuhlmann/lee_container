









(function($) {
 

//get the total number of posts from the index page
var posts_count = $('#posts_count').attr('data-count');

//get the posts_per_page count from the index page
var posts_per_page = $('#posts_per_page').attr('data-count');

//divide the post_count and posts_per_page count to get the maximum number of times the load more button can be clicked.
var ajax_count = Math.ceil(posts_count/posts_per_page);

//Set the page number to 1 to get started
var page = 1; 
 
 



$(document).on( 'click', '#load_more', function( event ) {
	event.preventDefault();
	
	$('#load_more').addClass('hide_button').removeClass('show_button');
	
	page++; //increase the page number each time the button is clicked.
	
	$.ajax({
		url: ajaxpagination.ajaxurl,
		type: 'post',
		data: {
			action: 'ajax_pagination',
			query_vars: ajaxpagination.query_vars,
			page: page
		},
		success: function( html ) {
			var $items = $.parseHTML(html); //convert the returned html into objects
  
			//check to see if there are more pages of content
			if(page <= ajax_count){
				$grid.append( $items ).masonry( 'appended', $items );
				$grid.imagesLoaded().progress( function() {
					$grid.masonry('layout');
				});
			}
			
			//hiding/showing load button and warning
			if(page < ajax_count){
				$('#load_more').addClass('show_button');
			}else {
				$('#no_more').removeClass('hidden');
			}
			
		}
	});
});




//Create the masonry container
//var $container = $('#ms-container');

var $grid;


/* <![CDATA[ */
var ajaxpagination = {"ajaxurl":"/sitefiles/wp-admin/admin-ajax.php"};
/* ]]> */



jQuery(window).load(function() {  
	$grid = $('#masonry_wrapper').masonry({
		itemSelector: '.masonry-item',
		columnWidth: '.masonry-item',
		percentPosition: true
	});
});










})(jQuery);








//This is the article I used to get the AJAX figured out.
//http://premium.wpmudev.org/blog/load-posts-ajax/