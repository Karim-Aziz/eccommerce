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
  <title> e commerce | Home </title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="{{ url('/lib/bootstrap-4.4.1/css/bootstrap.min.css') }}" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="{{ url('/lib/fontawesome/css/all.min.css') }}" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap" rel="stylesheet" />
  <!-- OwlCarousel2 -->
  <link rel="stylesheet" href="{{ url('/lib/OwlCarousel/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ url('/lib/OwlCarousel/css/owl.theme.default.min.css') }}" />
  <!-- jquery ui -->
  <link rel="stylesheet" href="{{ url('/lib/jquery-ui/jquery-ui.min.css')}}" />
  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
  <!-- Media Style -->
  <link rel="stylesheet" href="{{ url('/css/media.css') }}" />
  @if (App::isLocale('ar'))
    <!-- Import Custom Styles AR File -->
    <link rel="stylesheet" href="{{ url('/css/style_ar.css') }}" />
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
  @include('welcome.items')
  @include('welcome.POPULAR')
  @include('welcome.latest')


  @include('welcome.footer')

  <!-- End Contact Seaction -->

    <!-- ================================================================================ -->
    <!-- =========== Start Jquery Files =========== -->
    <script src="{{ url('/lib/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- =========== Start Bootstrap Files =========== -->
    <script src="{{ url('/lib/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/lib/bootstrap-4.4.1/js/popper.min.js') }}"></script>
    <!-- =========== Start OwlCarousel =========== -->
    <script src="{{ url('/lib/OwlCarousel/js/owl.carousel.min.js') }}"></script>
    <!--  isotope js library  -->
    <script src="{{ url('/lib/isotope/isotope.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ url('/lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- =========== Custom Js File =========== -->
    @if (App::isLocale('ar'))
    <script src="{{ url('/js/main_ar.js') }}"></script>
    @else
    <script src="{{ url('/js/main.js') }}"></script>
    @endif
  </body>
</html>
