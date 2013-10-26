$(document).ready(function() {
	// start tabs
	$(".tabs").tabs({
		beforeActivate: function (event, ui) {
	        window.location.hash = ui.newPanel.selector;
	        var $target = $(ui.panel);

	        $('.content:visible').effect( 'fold',
	            {},
	            1400,
	            function(){
	               $target.fadeIn();
	        }); 
	    }
	});
	// slider
	jQuery('#slider').anythingSlider({
		 //buildNavigation     : false,
		 buildStartStop      : false,
		 hashTags			 : false,
		 expand				 : false,
		 appendForwardTo	 : '.icon-chevron-right',
		 appendBackTo	 	 : '.icon-chevron-left',
		 mode				 : 'fade'
	});
	// instagram
    $('#slideshow').embedagram({
        instagram_id: 23503,
        thumb_width: 150,
        limit: 5
    });
});
// start fitvids
//jQuery(window).load(function(){
//	jQuery(".video_embed").fitVids();
//});	 