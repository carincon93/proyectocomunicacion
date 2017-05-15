$(document).ready(function() {
	$('.vision').hide();
	$('#btnVision').click(function(event) {
		$('.mision').fadeOut('slow/400/fast', function() {
			$('.vision').fadeIn('slow/400/fast', function(){});
		});
	});
	$('#btnMision').click(function(event) {
		$('.vision').fadeOut('slow/400/fast', function() {
			$('.mision').fadeIn('slow/400/fast', function() {});
		});
		
	});

	// Select all links with hashes
	$('a[href*="#"]')
	// Remove links that don't actually link to anything
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function(event) {
	    // On-page links
	    if (
	    	location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	    	&& 
	    	location.hostname == this.hostname
	    ) {
	      	// Figure out element to scroll to
	  		var target = $(this.hash);
	  		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      	// Does a scroll target exist?
	      	if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		        	scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		    	});
	    	}
		}
	});
	var $sec = $('.sec');
	var $nlinks = $('.navbar-links li a');
	function navbarScrollposStyles() {				
		var st = $(this).scrollTop();
		$('.splitter').css('height', (st * 9 / 8)+'px');
		$('.title-parallax').css('top', (st * 1 / 8)+'px');
	    if($(window).scrollTop() > 650) {
	        $($sec).addClass('navbar-index-scroll animated fadeInDown').removeClass('fadeOutUp');
	        $($nlinks).css('color', '#FC7323');
	    } else {
	        $($sec).removeClass('fadeInDown').addClass('fadeOutUp');
	        $($nlinks).css('color', '#fff');
	    }
	}

	$(navbarScrollposStyles);                           // 2. Do on DOM ready and 
	$(window).on('load scroll', navbarScrollposStyles); // 3. on window.onload and onscroll

	// $('.btnp').click(function(event) {
	// 	$('.btnp').show();
	// 	$('.par').hide();
	// 	$(this).next().show();
	// 	$(this).hide();
	// });

	// Changing the defaults
	window.sr = ScrollReveal({ reset: false,});
	// Customizing a reveal set
	sr.reveal('.foo');

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