$(document).ready(function() {

	// $('.navbar-links li').mouseover(function(event) {		
	// 	$(this).children().fadeIn();
	// });
	$('.pqrs-link').click(function(event) {
		$('.pqrs').addClass('open-pqrs');
	});
	$('.fa.fa-close').click(function(event) {
		$('.pqrs').removeClass('open-pqrs');
	});

	var $galeria 	= $("#go-galeria"),
	$formacion 		= $("#go-formacion");
 
	$galeria.on("click", function() {
	  $(".galeria").velocity("scroll", { 
	    duration: 2000,
	    easing: "easeInBack"
	  });
	});

	$formacion.on("click", function() {
	  $(".pformacion").velocity("scroll", { 
	    duration: 2000,
	    easing: "easeInBack"
	  });
	});
	AOS.init();
	window.onscroll = function(event) {
		var scroll = pageYOffset,
			facebook = $('.social-networks').children().first();
			twitter = $('.social-networks').children().first().next();
			instagram = $('.social-networks').children().first().next().next();
			googlePlus = $('.social-networks').children().first().next().next().next();
			ffacebook = $('.footer-social-networks').children().first();
			ftwitter = $('.footer-social-networks').children().first().next();
			finstagram = $('.footer-social-networks').children().first().next().next();
			fgooglePlus = $('.footer-social-networks').children().first().next().next().next();

		if (scroll >= 3400) {
			setTimeout(function(){
				$(facebook).removeClass('slideIn').addClass('slideOutLeft animated');
				$(ffacebook).removeClass('fadeOut').addClass('fadeIn animated');
			}, 800);
			setTimeout(function(){
				$(twitter).removeClass('slideIn').addClass('slideOutLeft animated');
				$(ftwitter).removeClass('fadeOut').addClass('fadeIn animated');
			}, 900);
			setTimeout(function(){
				$(instagram).removeClass('slideIn').addClass('slideOutLeft animated');
				$(finstagram).removeClass('fadeOut').addClass('fadeIn animated');
			}, 1100);
			setTimeout(function(){
				$(googlePlus).removeClass('slideIn').addClass('slideOutLeft animated');
				$(fgooglePlus).removeClass('fadeOut').addClass('fadeIn animated');
			}, 1300);
		} else {
			$(facebook).removeClass('slideOutLeft').addClass('slideInLeft');
			$(twitter).removeClass('slideOutLeft').addClass('slideInLeft');
			$(instagram).removeClass('slideOutLeft').addClass('slideInLeft');
			$(googlePlus).removeClass('slideOutLeft').addClass('slideInLeft');
			$(ffacebook).removeClass('fadeIn').addClass('fadeOut');
			$(ftwitter).removeClass('fadeIn').addClass('fadeOut');
			$(finstagram).removeClass('fadeIn').addClass('fadeOut');
			$(fgooglePlus).removeClass('fadeIn').addClass('fadeOut');



			
		}
		
	}
	// function scrollFooter(scrollY, heightFooter) {
	// 	console.log(scrollY);
 //    	console.log(heightFooter);

 //    	if (scrollY >= heightFooter) {
 //    		$('footer').css('bottom', '0px');
 //    	} else {
 //    		$('footer').css('bottom', '-'+ heightFooter +'px');
 //    	}
	// };

	// $(window).load(function() {
	// 	var windowHeight	= $(window).height(),
	// 	footerHeight		= $('footer').height(),
	// 	heightDocument 		= (windowHeight) + ($('.content').height()) + (footerHeight) - 20,
	// 	scrollAnimate		= $('.scroll-animate');
	// 	wrap 				= $('.scroll-animate-wrap');

	// 	$('.wrap').css('height', heightDocument + 'px');
	// 	$(scrollAnimate).css('height', heightDocument + 'px');

	// 	scrollFooter(window.scrollY, footerHeight);

	// 	window.onscroll = function(event) {
	// 		var scroll = window.scrollY;

	// 		$(wrap).css('top', '-'+ scroll +'px');

	// 		scrollFooter(scroll, footerHeight);
	// 	};
	// });


	$(".owl-carousel").owlCarousel({
		nav: true,
		margin: 30,
		autoplay: true,
		loop: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive: {
			0: {
				items: 1,
				dots: true,
				nav: false
			},
			768: {
				items: 3,
				dots: true,
				nav: false
			},
			1024: {
				items: 4
			}
		}
	});

	var $sec = $('.sec');
	var $nlinks = $('.navbar-links li');
	function navbarScrollposStyles() {				
		var st = $(this).scrollTop();
		// $('.splitter').css('height', (st * 9 / 8)+'px');
		$('svg.img-hero').css('top', (st * 2 / 4)+'px');
	    if($(window).scrollTop() > 650) {
	        $($sec).addClass('navbar-index-scroll animated fadeInDown').removeClass('fadeOutUp');
	        $('.ltext').css('color', '#90c0b6');
	        $($nlinks).css('color', '#90c0b6');
	        $('.login-link').css('color', '#90c0b6');
	    } else {
	        $($sec).removeClass('fadeInDown').addClass('fadeOutUp');
	        $($nlinks).css('color', '#fff');
	        $('.ltext').fadeIn().css('color', '#fff');
	    }
	}

	$(navbarScrollposStyles);                           // 2. Do on DOM ready and 
	$(window).on('load scroll', navbarScrollposStyles); // 3. on window.onload and onscroll

	var overlayNav = $('.cd-overlay-nav'),
	overlayContent = $('.cd-overlay-content'),
	navigation = $('.cd-primary-nav'),
	toggleNav = $('.cd-nav-trigger');

	//inizialize navigation and content layers
	layerInit();
	$(window).on('resize', function(){
		window.requestAnimationFrame(layerInit);
	});

	//open/close the menu and cover layers
	toggleNav.on('click', function(){
		$('.navbar-index').toggleClass('hide');
		if(!toggleNav.hasClass('close-nav')) {
			//it means navigation is not visible yet - open it and animate navigation layer
			toggleNav.addClass('close-nav');
			
			overlayNav.children('span').velocity({
				translateZ: 0,
				scaleX: 1,
				scaleY: 1,
			}, 600, 'easeInOutCubic', function(){
				navigation.addClass('fade-in');
			});
		} else {
			//navigation is open - close it and remove navigation layer
			toggleNav.removeClass('close-nav');
			
			overlayContent.children('span').velocity({
				translateZ: 0,
				scaleX: 1,
				scaleY: 1,
			}, 600, 'easeInCubic', function(){
				navigation.removeClass('fade-in');
				
				overlayNav.children('span').velocity({
					translateZ: 0,
					scaleX: 0,
					scaleY: 0,
				}, 0);
				
				overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					overlayContent.children('span').velocity({
						translateZ: 0,
						scaleX: 0,
						scaleY: 0,
					}, 0, function(){overlayContent.removeClass('is-hidden')});
				});
				if($('html').hasClass('no-csstransitions')) {
					overlayContent.children('span').velocity({
						translateZ: 0,
						scaleX: 0,
						scaleY: 0,
					}, 0, function(){overlayContent.removeClass('is-hidden')});
				}
			});
		}
	});

	function layerInit(){
		var diameterValue = (Math.sqrt( Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2))*2);
		overlayNav.children('span').velocity({
			scaleX: 0,
			scaleY: 0,
			translateZ: 0,
		}, 50).velocity({
			height : diameterValue+'px',
			width : diameterValue+'px',
			top : -(diameterValue/2)+'px',
			left : -(diameterValue/2)+'px',
		}, 0);

		overlayContent.children('span').velocity({
			scaleX: 0,
			scaleY: 0,
			translateZ: 0,
		}, 50).velocity({
			height : diameterValue+'px',
			width : diameterValue+'px',
			top : -(diameterValue/2)+'px',
			left : -(diameterValue/2)+'px',
		}, 0);
	}


	setInterval(function() {
	    $('.plus-a').velocity( { translateY: '-40rem', opacity: 0}, 5000);
	    $('.plus-a').velocity('reverse', {duration: 1});
	}, 2000);
	setInterval(function() {
	    $('.plus-b').velocity( { translateY: '-20rem', opacity: 0}, 3000);
	    $('.plus-b').velocity('reverse', {duration: 1});
	}, 1000);
	setInterval(function() {
	    $('.plus-c').velocity( { translateY: '-28rem', opacity: 0}, 2000);
	    $('.plus-c').velocity('reverse', {duration: 2});
	}, 500);

		$(function() {
			
			var Page = (function() {

				var $navArrows = $( '#nav-arrows' ).hide(),
					$navOptions = $( '#nav-options' ).hide(),
					$shadow = $( '#shadow' ).hide(),
					slicebox = $( '#sb-slider' ).slicebox( {
						onReady : function() {

							$navArrows.show();
							$navOptions.show();
							$shadow.show();

						},
						orientation : 'h',
						cuboidsCount : 3
					} ),
					
					init = function() {

						initEvents();
						
					},
					initEvents = function() {

						// add navigation events
						$navArrows.children( ':first' ).on( 'click', function() {

							slicebox.next();
							return false;

						} );

						$navArrows.children( ':last' ).on( 'click', function() {
							
							slicebox.previous();
							return false;

						} );

						$( '#navPlay' ).on( 'click', function() {
							
							slicebox.play();
							return false;

						} );

						$( '#navPause' ).on( 'click', function() {
							
							slicebox.pause();
							return false;

						} );

					};

					return { init : init };

				})();

				Page.init();
			});
	});