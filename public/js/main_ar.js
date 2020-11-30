// ===========================================
//  Start Home Page
// ===========================================

// ================== Start Slider  =========================

$("#shop-slider").owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  nav: false,
  dots: false,
  smartSpeed: 1000,
  responsiveClass: true,
  rtl: true,
});

// ================== Start Project Area =========================

$(document).ready(function () {
  let $btns = $(".project-area .button-group button");

  $btns.click(function (e) {
    $(".project-area .button-group button").removeClass("active");
    e.target.classList.add("active");

    let selector = $(e.target).attr("data-filter");
    $(".project-area .grid").isotope({
      filter: selector,
    });

    return false;
  });

  $(".project-area .button-group #btn1").trigger("click");
});

// ================== Start POPULAR PRODUCTS AND LATEST PRODUCTS ==================

$("#product-all,#product-all-2").owlCarousel({
  rtl: true,
  loop: true,
  margin: 20,
  autoplay: true,
  navText: [
    "<i class='fa fa-angle-right'></i>",
    "<i class='fa fa-angle-left'></i>",
  ],
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: true,
  dots: false,
  smartSpeed: 1000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

// =================== Start Brand ========================

$("#brand").owlCarousel({
  rtl: true,
  loop: true,
  nav: false,
  dots: false,
  margin: 20,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  autoplay: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 3,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

