$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  
})
  
$(window).scroll(function(){
	if ($(this).scrollTop() > 50) {
	   $('.header-section').addClass('fixed');
	} else {
	   $('.header-section').removeClass('fixed');
	}
});





$(document).ready(function(){
	$(".recycle-slider-section .slider").slick({
	infinite: true,
	arrows: false,
	dots: false,
	fade: true,
	autoplay: false,
	speed: 800,
	slidesToShow: 1,
	slidesToScroll: 1,

	});

	//ticking machine
	var percentTime;
	var tick;
	var time = 1;
	var progressBarIndex = 0;

	$('.progressBarContainer .progressBar').each(function(index) {
	    var progress = "<div class='inProgress inProgress" + index + "'></div>";
	    $(this).html(progress);
	});

	function startProgressbar() {
	    resetProgressbar();
	    percentTime = 0;
	    tick = setInterval(interval, 10);
	}

	function interval() {
	    if (($('.slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
	        progressBarIndex = $('.slider .slick-track div[aria-hidden="false"]').data("slickIndex");
	        startProgressbar();
	    } else {
	        percentTime += 1 / (time + 5);
	        $('.inProgress' + progressBarIndex).css({
	            width: percentTime + "%"
	        });
	        if (percentTime >= 100) {
	            $('.single-item').slick('slickNext');
	            progressBarIndex++;
	            if (progressBarIndex > 2) {
	                progressBarIndex = 0;
	            }
	            startProgressbar();
	        }
	    }
	}

	function resetProgressbar() {
	    $('.inProgress').css({
	        width: 0 + '%'
	    });
	    clearInterval(tick);
	}
	startProgressbar();
	// End ticking machine

	$('.progressBarContainer div').click(function () {
		clearInterval(tick);
		var goToThisIndex = $(this).find("span").data("slickIndex");
		$('.single-item').slick('slickGoTo', goToThisIndex, false);
		startProgressbar();
	});	
		
});

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});



  $("button.navbar-toggle").click(function(){
	//$("#myNavbar1").css({"left": "0","display": "block"});
	$(".navbar div.navbarcollapse.collapse").addClass("in");
	$(".navbar div.navbarcollapse.collapse .sldebar-left").css({"left": "0", "transition": ".3s ease"});
  });

$("header.header-section .dropdown").mouseover(function() {
    $(".header-section").addClass("header-fixed");		
}).mouseout(function() {
    $(".header-section").removeClass("header-fixed");    
});

$(document).ready(function () {
    $(".navbar-toggle").click(function (event) {
        $(".navbar div.navbar-collapse.collapse").slideToggle("fast").show();
        event.stopPropagation(); 
        $('.navbar div.navbarcollapse.collapse').show();
    });

    $('.navbar div.navbarcollapse.collapse').click(function () {
            $(this).hide();
            $(".navbar div.navbarcollapse.collapse .sldebar-left").css({"left":"-100%"});
    });
    
});





$(document).ready(function () {
    $(".dropd > a").on("click", function (event) {
        event.preventDefault();
        
        let $submenu = $(this).next(".level-second");
        
        // Close other open menus smoothly
        $(".level-second").not($submenu).slideUp(300);
        
        // Toggle the clicked menu smoothly
        $submenu.stop(true, true).slideToggle(300);
    });
    
    // Close menu when clicking outside
    $(document).on("click", function (event) {
        if (!$(event.target).closest(".dropd").length) {
            $(".level-second").slideUp(300);
        }
    });
});









