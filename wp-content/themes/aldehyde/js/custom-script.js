jQuery( document ).ready( function( $ ) {

	$('#menu-header-menu > li.menu-item').hover(function(){
		var menuHeight = $(this).find('.sub-menu').height();
          $('.gray-area').height(menuHeight);
	},function(){
		 $('.gray-area').height(0);
	});
	
	
} );