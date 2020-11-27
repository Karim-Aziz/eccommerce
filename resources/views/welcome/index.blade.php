@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

<!DOCTYPE html>
@if (App::isLocale('ar'))
<html dir="rtl">
@else
<html lang="en">
@endif

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> e commerce | @yield('title') </title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <!-- Google Font -->

  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap"
    rel="stylesheet" />

  <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="{{ url('/lib/OwlCarousel2/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/lib/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}" />


  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="{{ url('/css/custom.css') }}" />


  <!-- Media Style -->
  <link rel="stylesheet" href="{{ url('/css/media.css') }}" />
  @if (App::isLocale('ar'))
    <!-- Import Custom Styles AR File -->
    <link rel="stylesheet" href="{{ url('/css/custom_ar.css') }}" />
  @endif
  @yield('css')
  @php
      $home_desc = App\home_desc::first();
  @endphp
  <style>
    .img-background {
      background: url("{{ @$home_desc->image ? '/img/home_desc/'.$home_desc->image : url('/img/bac-img.jpg')}}") no-repeat top center;
    }
  </style>
</head>



<body>
  @php
    $settings = App\settings::first();
    $pages = App\pages::orderBy('id', 'desc')->get();
  @endphp
  @include('welcome.Navbar')
  @include('welcome.home_desc')
  @include('welcome.about_as')
  @include('welcome.items')
  @include('welcome.latest')
  @include('welcome.contact')


  @include('welcome.footer')

  <!-- End Contact Seaction -->

    <!-- ================================================================================ -->
    <!-- Bootstrap Js Files -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <!-- OwlCarousel2 -->
    <script src="{{ url('/lib/OwlCarousel2/dist/owl.carousel.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ url('/lib/isotope.min.js') }}"></script>
    <!-- Custom Js Files -->
    <script src="{{ url('/js/custom.js') }}"></script>
  </body>
</html>
