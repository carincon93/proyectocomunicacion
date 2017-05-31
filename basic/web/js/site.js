$(document).ready(function() {
	var toggleNav = $('.trigger-menu'),
		overlayContact = $('.overlay-contact'),
		overlayBackground = $('.overlay-background'),
		contactNavigation = $('.overlay-contact');

	toggleNav.on('click', function(event) {
		event.preventDefault();
		if(!toggleNav.hasClass('close-nav')) {
			//it means navigation is not visible yet - open it and animate navigation layer
			toggleNav.addClass('close-nav');
			overlayBackground.addClass('open');
			setTimeout(function(){
				overlayContact.addClass('open');
			},600);
		} else {
			//navigation is open - close it and remove navigation layer
			toggleNav.removeClass('close-nav');
			
		}	
	});

	// Owl Carousel
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

	$iconPrev = $('.owl-prev');
	$iconNext = $('.owl-next');
	$iconPrev.velocity({
	  translateX: "10px"
	}, {
	  loop: true
	}).velocity("reverse");

	$iconNext.velocity({
	  translateX: "10px"
	}, {
	  loop: true
	}).velocity("reverse");

	// SmoothScroll
	var $galeria 			= $("#go-galeria"),
	$programasFormacion 	= $("#go-formacion"),
	$mision					= $("#go-mision");
 
	$galeria.on("click", function() {
	  $(".galeria").velocity("scroll", { 
	    duration: 2000,
	    easing: "easeInBack"
	  });
	});
	$programasFormacion.on("click", function() {
	  $(".programas-formacion-section").velocity("scroll", { 
	    duration: 2000,
	    easing: "easeInBack"
	  });
	});
	$mision.on("click", function() {
	  $(".objetivos").velocity("scroll", { 
	    duration: 2000,
	    easing: "easeInBack"
	  });
	});

	// Animations +
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

	// Dropdown hover
	// $('nav').on('mouseover', '.dropdown', function(event) {
	// 	event.preventDefault();
	// 	$(this).addClass('open');
	// });

	// Login effect
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
		$('.navbar-inverse').toggleClass('hide');
		$('.sec').toggleClass('hide');
		if(!toggleNav.hasClass('close-nav')) {
			//it means navigation is not visible yet - open it and animate navigation layer
			toggleNav.addClass('close-nav');
			
			overlayNav.children('span').velocity({
				translateZ: 0,
				scaleX: 1,
				scaleY: 1,
			}, 600, 'easeInOutCubic', function(){
				navigation.addClass('fade-in').removeClass('fade-out');
			});
		} else {
			//navigation is open - close it and remove navigation layer
			toggleNav.removeClass('close-nav');
			
			overlayContent.children('span').velocity({
				translateZ: 0,
				scaleX: 1,
				scaleY: 1,
			}, 600, 'easeInCubic', function(){
				navigation.removeClass('fade-in').addClass('fade-out');
				
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



});