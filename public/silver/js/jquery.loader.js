jQuery(function() {
	jQuery('#gallery .portfolio li img').hide();
});

jQuery(window).bind('load', function() {
	 var i = 1;
	 var imgs = jQuery('#gallery .portfolio li img').length;
	 var int = setInterval(function() {
		 //console.log(i); check to make sure interval properly stops
		 if(i >= imgs) clearInterval(int);
		 jQuery('#gallery .portfolio li img:hidden').eq(0).fadeIn(300);
		 i++;
	 }, 300);
});