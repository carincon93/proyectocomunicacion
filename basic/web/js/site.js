$(document).ready(function() {
  $('#a12').change(function(event) {
    var dselectId = $(this).val();
    alert(dselectId);
    $.get('getmunicipio', {dselectId : dselectId}, function(data) {
        // var data = $.parseJSON(data);
        $('#a13').html(data);
    });
  });

    var owln = $('.owl-carousel');
    owln.owlCarousel({
        items:3,
        loop:true,
        margin:25,
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:true,
        navText: ["<i class='glyphicon glyphicon-chevron-left'></i>", "<i class='glyphicon glyphicon-chevron-right'></i>"],
        nav: true,
        responsive: {
            0: {
                items: 1,
                dots: true,
                nav: false
            },
            768: {
                items: 2,
                dots: true,
                nav: false
            },
            1024: {
                items: 3
            }
        }
    });

	// $('.gallerybox').gallerybox();
    
    // SmoothScroll
    var programasFormacion = $("#go-formacion"),
        galeria = $("#go-galeria"),
        backToTop = $('.back-to-top');

    programasFormacion.on("click", function() {
      $(".programas-formacion").velocity("scroll", { 
        duration: 2000,
        easing: "easeInBack"
      });
    });
    backToTop.on("click", function() {
      $("body").velocity("scroll", { 
        duration: 2000,
        easing: "easeInBack"
      });
    });
    galeria.on("click", function() {
      $(".gallery-section").velocity("scroll", { 
        duration: 2000,
        easing: "easeInBack"
      });
    });
    // Labels Effects 
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

    $(window).on('scroll', function () {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();

        // console.log(scrollHeight);
        // console.log(scrollPosition);

        if ((scrollHeight - scrollPosition) / scrollHeight > 0.12) {
            $('.social-networks-right').removeClass('fadeOut').addClass('fadeIn');
            $('.back-to-top').addClass('show fadeOut');
        } else {
            $('.back-to-top').removeClass('show fadeOut').addClass('fadeIn');
            $('.social-networks-right').addClass('animated fadeOut');

            // $('.footer-social-networks').fadeOut('slow/400/fast');
        }
    });

});