/* ===================================
--------------------------------------
  SolMusic HTML Template
  Version: 1.0
--------------------------------------
======================================*/


'use strict';

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

	if($('.playlist-area').length > 0 ) {
		var containerEl = document.querySelector('.playlist-area');
		var mixer = mixitup(containerEl);
	}

});

$(window).on('load', function() {
	var portfolioIsotope = $('.portfolio-container').isotope({
	itemSelector: '.portfolio-item'
	});

	$('#portfolio-flters li').on('click', function() {
	$("#portfolio-flters li").removeClass('filter-active');
	$(this).addClass('filter-active');

	portfolioIsotope.isotope({
		filter: $(this).data('filter')
	});
	});

	
});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$(".main-menu").slicknav({
        appendTo: '.header-section',
		allowParentLinks: true,
		closedSymbol: '<i class="fa fa-angle-right"></i>',
		openedSymbol: '<i class="fa fa-angle-down"></i>'
	});
	
	$('.slicknav_nav').prepend('<li class="header-right-warp"></li>');
    $('.header-right').clone().prependTo('.slicknav_nav > .header-right-warp');

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	
	$('.hero-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		mouseDrag: false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		autoplayTimeout:7000,
		autoplay: true
	});
		
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})
}

)(jQuery);




