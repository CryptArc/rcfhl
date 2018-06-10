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
        
		//! -- ^# Home Page Slider
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
		
		//! -- ^# Team Single
		
		//! ---- ^# Team Stat Leaders
		var pointLeader = $( ".single-team #point-leader-data tbody .data-name a" ).text();
		var pointLeaderNum = $( ".single-team #point-leader-data tbody .data-playernumber" ).text();
		var pointLeaderStat = $(".single-team #point-leader-data tbody .data-p").text();
		$(".single-team .point-leader .player-name").text(pointLeader);
		$(".single-team .point-leader .player-number").text(pointLeaderNum);
		$(".single-team .point-leader .player-stat").text(pointLeaderStat);
		
		var goalLeader = $( ".single-team #goal-leader-data tbody .data-name a" ).text();
		var goalLeaderNum = $( ".single-team #goal-leader-data tbody .data-playernumber" ).text();
		var goalLeaderStat = $(".single-team #goal-leader-data tbody .data-g").text();
		$(".single-team .goal-leader .player-name").text(goalLeader);
		$(".single-team .goal-leader .player-number").text(goalLeaderNum);
		$(".single-team .goal-leader .player-stat").text(goalLeaderStat);
		
		var plusminusLeader = $( ".single-team #plusminus-leader-data tbody .data-name a" ).text();
		var plusminusLeaderNum = $( ".single-team #plusminus-leader-data tbody .data-playernumber" ).text();
		var plusminusLeaderStat = $(".single-team #plusminus-leader-data tbody .data-plusminus").text();
		$(".single-team .plusminus-leader .player-name").text(plusminusLeader);
		$(".single-team .plusminus-leader .player-number").text(plusminusLeaderNum);
		$(".single-team .plusminus-leader .player-stat").text(plusminusLeaderStat);
		
		var svpercentLeader = $( ".single-team #svpercent-leader-data tbody .data-name a" ).text();
		var svpercentLeaderNum = $( ".single-team #svpercent-leader-data tbody .data-playernumber" ).text();
		var svpercentLeaderStat = $(".single-team #svpercent-leader-data tbody .data-svpercent").text().substring(1, 5);
		$(".single-team .svpercent-leader .player-name").text(svpercentLeader);
		$(".single-team .svpercent-leader .player-number").text(svpercentLeaderNum);
		$(".single-team .svpercent-leader .player-stat").text(svpercentLeaderStat);
		
		// Names on two lines
		var playerName = $(".single-team .player-name");
		playerName.each(function() {
			$(this).html($(this).text().replace(" ", "</br>"));
		});


		//! ---- ^# Team Record
		var teamPosition, teamWins, teamLosses, teamOTL;
		var teamName = $(".team-single-hero h1").text();
		
		var standingTableRow = $("#standing-data .sp-league-table tbody tr");
		standingTableRow.each(function() {
			if ($(this).children(".data-name").text() == teamName) {
				teamPosition = $(this).children(".data-rank").text();
				teamWins = $(this).children(".data-w").text();
				teamLosses = $(this).children(".data-l").text();
				teamOTL = $(this).children(".data-ot").text();
				return false;		
			}
		});	
		
    }); //! ^# end document.ready
    
}); //end jquery
