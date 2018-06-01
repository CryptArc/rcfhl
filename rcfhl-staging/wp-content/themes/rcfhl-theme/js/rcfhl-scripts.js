jQuery(function($){
	  
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
		
		$('.home-image-slider').slick({
// 			autoplay: true,
			centerMode: true,
			variableWidth: true,
			dots: true,
			arrows: true,
			centerPadding: '60px',
// 			nextArrow: '<button class="next"><img src="/wp-content/themes/gotheme2015/images/right-arrow-dark-grey.svg" width="25" height="27" alt="right arrow"></button>',
// 			prevArrow: '<button class="prev"><img src="/wp-content/themes/gotheme2015/images/right-arrow-dark-grey.svg" width="25" height="27" alt="left arrow"></button>', 
			slidesToShow: 3,
			responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 1,
						arrows: true,
						dots: true,
// 						nextArrow: '<button class="next"><img src="/wp-content/themes/gotheme2015/images/right-arrow-dark-grey.svg" width="25" height="27" alt="right arrow"></button>',
// 						prevArrow: '<button class="prev"><img src="/wp-content/themes/gotheme2015/images/right-arrow-dark-grey.svg" width="25" height="27" alt="left arrow"></button>', 
					}
				}
			],
		});	
        
    }); //! ^# end document.ready
    
}); //end jquery
