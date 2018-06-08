jQuery(document).ready(function() {
	jQuery(function() {
		// Dropdown toggle
		jQuery('.togglebar').click(function(){
		  jQuery('.responsive-menu').toggle();
		});
		jQuery(document).click(function(e) {
		  var target = e.target;
		  if (!jQuery(target).is('.togglebar') && !jQuery(target).parents().is('.togglebar')) {
		    jQuery('.responsive-menu').hide();
		  }
		});
	});
	if ( window.location.pathname == '/' ){
		jQuery('body').addClass('fullheight');
	}

	jQuery(window).scroll(function () {
		if ( jQuery(window).width() < 768 ){
			jQuery('header').addClass('fixed-header')
			jQuery('#slideshow').css('padding-top','80px')
		}
		else{
			if( jQuery(window).scrollTop() >= 121 ){
				jQuery('menu').addClass('fixed-header');
			}
			else if ( (jQuery(window).scrollTop() <= 120) ){
				jQuery('menu').removeClass('fixed-header');
			}
		}
	});
});