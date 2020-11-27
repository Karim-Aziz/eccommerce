// sticky navigation menu
let nav_offset_top = $('.header_area').height() + 10;
function navbarFixed() {
  if ($('.header_area').length) {
    $(window).scroll(function () {
      let scroll = $(window).scrollTop();
      if (scroll >= nav_offset_top) {
        $('.header_area .main-menu').addClass('navbar_fixed');
      } else {
        $('.header_area .main-menu').removeClass('navbar_fixed');
      }
    })
  }
}
navbarFixed();

// ============================================================ //

// SmoothScroll
var scroll = new SmoothScroll('a[href*="#"]');

// ============================================================ //


// Start Active Link

$('#topheader .navbar-nav a').on('click', function () {
  $('#topheader .navbar-nav').find('li.active').removeClass('active');
  $(this).parent('li').addClass('active');
});

// ============================================================ //

// OWL Carousel 1

$('#owl-travels').owlCarousel({
  loop: true,
  margin: 20,
  autoplay: true,
  navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: true,
  dots: false,
  smartSpeed: 1000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})

// ============================================================ //

// OWL Carousel 2

$('#owl-travels-2').owlCarousel({
  loop: true,
  margin: 20,
  autoplay: true,
  navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: true,
  dots: false,
  smartSpeed: 1000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})

// ============================================================ //


// OWL Carousel 3

$('#owl-travels-3').owlCarousel({
  loop: true,
  margin: 20,
  autoplay: true,
  navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: true,
  dots: false,
  smartSpeed: 1000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})

// ============================================================ //

//  OWL Carousel 4


$('.testimonial-slider').owlCarousel({
  loop: true,
  margin: 30,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  nav: false,
  dots: true,
  smartSpeed: 1000,
  responsiveClass: true,
  responsive: {
    0: {
      dotsEach: 3,
      items: 1
    },
    576: {
      dotsEach: 3,
      items: 1
    },
    768: {
      dotsEach: 3,
      items: 1
    },
    992: {
      dotsEach: 3,
      items: 2
    }
  }
});


// ============================================================ //
// =============== Start Other Page ============== //
// ============================================================ //

$('#test-slider').owlCarousel({
  items: 1,
  loop: true,
  margin: 30,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: false,
  dots: true,
  smartSpeed: 1000,
  responsiveClass: true,
});

// nice scroll links 
$('a[href*="#"]').on('click', function(e) {
  e.preventDefault()

  $('html, body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top-90,
    },
    1000,
    'linear'
  )
});


