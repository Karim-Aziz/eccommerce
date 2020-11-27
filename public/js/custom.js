// Start Slider Images
$(document).ready(function () {
  $("#slider_images,#details_product").owlCarousel({
    loop: true,
    mouseDrag: true,
    autoplay: true,
    rtl: true,
    // nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

// Start Latest Products
$(document).ready(function () {
  $("#latest_products").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    rtl: true,
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
});

// Start Portfolio Section

(function () {
  var $projects = $(".projects");

  $projects.isotope({
    itemSelector: ".item",
    // layoutMode: "fitRows",
  });

  $("ul.filters > li").on("click", function (e) {
    e.preventDefault();

    var filter = $(this).attr("data-filter");

    $("ul.filters > li").removeClass("active");
    $(this).addClass("active");

    $projects.isotope({ filter: filter });
  });

  // $(".card")
  //   .mouseenter(function () {
  //     $(this).find(".card-overlay").css({ top: "-100%" });
  //     $(this).find(".card-hover").css({ top: "0" });
  //   })
  //   .mouseleave(function () {
  //     $(this).find(".card-overlay").css({ top: "0" });
  //     $(this).find(".card-hover").css({ top: "100%" });
  //   });
})(jQuery);

// sticky navigation menu
let nav_offset_top = $(".navbar").height() + 10;

function navbarFixed() {
  if ($(".navbar").length) {
    $(window).scroll(function () {
      let scroll = $(window).scrollTop();
      if (scroll >= nav_offset_top) {
        $(".navbar").addClass("navbar_fixed");
      } else {
        $(".navbar").removeClass("navbar_fixed");
      }
    });
  }
}
navbarFixed();

// Get the container element
var btnContainer = document.getElementById("topheader");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
