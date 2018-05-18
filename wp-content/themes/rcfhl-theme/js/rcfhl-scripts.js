jQuery(function($){
	
	jQuery(window).load(function () {
	    $('.gbg-loader-wrap').fadeOut();
	
	});     
     /*! ^# Document.ready */
    $(document).ready(function() {
	    
	    /*! -- ^# Mobile Header */
	    
        /*! --  -- ^#Hamburger menu Open */
        $('.mobile-hamburger-wrap').click(function() {
	        $('.mobile-header-overlay').addClass('open-menu');
	        $('.mobile-header-overlay').children('slide-element').addClass('visible');
        });

		/*! --  -- ^#Overlay Close */
        $('.mobile-overlay-close-wrap').click(function() {
	        $('.mobile-header-overlay').removeClass('open-menu');
	        $('.services-overlay').removeClass('open-menu');
	        $('.industries-overlay').removeClass('open-menu');
	        $('.about-menu-link').removeClass('open-menu');
	        $('.mobile-search-overlay').removeClass('open-menu');
        });
        
    }); //! ^# end document.ready
    
}); //end jquery
