$(document).ready(function() {
	// var navbar= $('.navbar-inverse');

	// window.onscroll = function() {
	// 	var scroll = window.scrollY;
	// 	if(scroll > 250) {
	// 		navbar.addClass('small-navbar');
	// 	} else {
	// 		navbar.removeClass('small-navbar');
	// 	}

		
	// }

	// Inputs Effects 
    $(window).load(function(){
		$(".form-group .effect-16").val("");
		
		$(".form-group .effect-16").focusout(function(){
			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
	});

	// 
	$(window).on('scroll', function () {
	    if ($(this).scrollTop() > 3370) {
	        $('.aside-social-networks').addClass('animated fadeOut');
			// $('.facebook-link').addClass('animated fadeIn delay');
	    } else {
			$('.aside-social-networks').removeClass('fadeOut').addClass('fadeIn');
			// $('.footer-social-networks').fadeOut('slow/400/fast');
	    }
	});

	// Owl Carousel
	$(".owl-carousel-news").owlCarousel({
		nav: true,
		margin: 100,
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
				items: 3
			}
		}
	});


	// Owl Carousel
	$(".owl-carousel-header").owlCarousel({
		nav: true,
		autoplay: true,
		loop: true,
		dots: false,
		// smartSpeed: 1000,
		autoplaySpeed: 1000,
		navText: [""],
		responsive: {
			0: {
				items: 1,
				dots: true,
				nav: false
			},
			768: {
				items: 1,
				dots: true,
				nav: false
			},
			1024: {
				items: 1
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


	



	// $(window).load(function() {

	// 	var windowHeight 	= $(window).height(),
	// 		heightDocument 	= (windowHeight) + ($('.site-index').height());

	// 		$('.site-index').css({'height': heightDocument + 'px'});


	// 		window.onscroll = function() {
	// 			var scroll = window.scrollY;

	// 			$('.site-index').css({'top' : '-' + scroll + 'px'});
	// 		}
	// });

/* Galería */
var jssor_1_SlideshowTransitions = [
  {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
  {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
  {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
  {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
  {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
  {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
  {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
  {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
  {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
  {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
  {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
  {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
  {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
  {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
];

var jssor_1_options = {
  $AutoPlay: 1,
  $SlideshowOptions: {
    $Class: $JssorSlideshowRunner$,
    $Transitions: jssor_1_SlideshowTransitions,
    $TransitionsOrder: 1
  },
  $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$
  },
  $ThumbnailNavigatorOptions: {
    $Class: $JssorThumbnailNavigator$,
    $Rows: 2,
    $Cols: 6,
    $SpacingX: 14,
    $SpacingY: 12,
    $Orientation: 2,
    $Align: 156
  }
};

var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

/*responsive code begin*/
/*remove responsive code if you don't want the slider scales while window resizing*/
function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
        refSize = Math.min(refSize, 960);
        refSize = Math.max(refSize, 300);
        jssor_1_slider.$ScaleWidth(refSize);
    }
    else {
        window.setTimeout(ScaleSlider, 30);
    }
}
ScaleSlider();
$(window).bind("load", ScaleSlider);
$(window).bind("resize", ScaleSlider);
$(window).bind("orientationchange", ScaleSlider);
/*responsive code end*/


/*toltip peguelo*/
$('[data-toggle="tooltip"]').tooltip();
            
});

