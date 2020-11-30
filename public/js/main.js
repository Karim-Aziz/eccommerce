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
  loop: true,
  margin: 20,
  autoplay: true,
  navText: [
    "<i class='fa fa-angle-left'></i>",
    "<i class='fa fa-angle-right'></i>",
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
      items: 9,
    },
  },
});

// ===========================================
// Start Products-Page
// ===========================================

$(function () {
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 1000,
    values: [75, 300],
    slide: function (event, ui) {
      $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
    },
  });
  $("#amount").val(
    "$" +
      $("#slider-range").slider("values", 0) +
      " - $" +
      $("#slider-range").slider("values", 1)
  );
});


//
$("input:file").change(function () {
  var fileName = $(this).val();
  if (fileName.length > 0) {
    $(this).parent().children("span").html(fileName);
  } else {
    $(this).parent().children("span").html("Choose file");
  }
});
//file input preview
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(".logoContainer img").attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
$("input:file").change(function () {
  readURL(this);
});
