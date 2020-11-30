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
    <!-- ================= Start Top Bar ================= -->
    <div class="top-bar">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-md-10 @if (App::isLocale('ar'))  text-right  @endif">
              <div class="other-link">
                 @if (Auth::check())
                  <a href="{{ url('/my_acount') }}">@lang('My Account')</a>
                  <span>|</span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      @lang('Logout')
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                @else
                  <a href="{{ url('/login') }}">@lang('Login')</a>
                @endif
                <span>|</span>
                <a href="{{ url('/cart') }}" >
                @lang('My Cart') <i class="fas fa-shopping-cart"></i>
                </a>
                <span>|</span>
                <a href="{{ url('/order') }}">@lang('My Orders')</a>
                <span>|</span>
                <a href="{{ url('/favorite') }}">@lang('My Favorite')</a>
              </div>
            </div>

            <div class="col-md-2">
              <div class="lang">
                <a class="@if (App::isLocale('en'))  active  @endif" href="{{url('/en')}}">English</a>
                <span>|</span>
                <a class="@if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">Arabic</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ================= End Top Bar ================= -->

    <!-- ================= Start Navbar ================= -->
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{url('/img/logo/'.@$settings->logo->name)}}" alt="logo">
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link active" href="{{ url('/') }}">@lang('Home')</a>
              </li>
              @if (count($pages) > 0)
                @foreach ($pages as $page)
                  <li class="nav-item">
                    @if (App::isLocale('ar'))
                      <a class="nav-link" href="{{url('/pages/'.@$page->id)}}"> {{ @$page->name_ar }}</a>
                    @else
                      <a class="nav-link" href="{{url('/pages/'.@$page->id)}}"> {{ @$page->name }}</a>
                    @endif
                  </li>
                @endforeach
              @endif

            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{url('/pages/search')}}" method="get">
              <input class="form-control mr-sm-0" placeholder="@lang('Search')" name="title" />
              {{ csrf_field() }}
              <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!-- ================= End Navbar ================= -->

    <!-- ***************************************************************** -->
    <div style="min-height: 445px;">
      @yield('content')
    </div>
    <div class="footer @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>@lang('Popular Searches')</h5>
            <ul>
              @if (count($pages) > 0)
                @foreach ($pages as $page)
                  <a href="{{url('/pages/'.@$page->id)}}">
                    @if (App::isLocale('ar'))
                      <li>{{ @$page->name_ar }}</li>
                    @else
                      <li>{{ @$page->name }}</li>
                    @endif
                  </a>
                @endforeach
              @endif
            </ul>
          </div>

          <div class="col-md-3">
            <h5>@lang('Account')</h5>
            <ul>
              @if (Auth::check())
                <a href="{{ url('/my_acount') }}"><li>@lang('My Account')</li></a>
              @else
                <a href="{{ url('/register') }}"><li>@lang('Login')</li></a>
              @endif
              <a href="{{ url('/cart') }}" ><li> @lang('My Cart')</li></a>
              <a href="{{ url('/order') }}"><li>@lang('My Orders')</li></a>
            </ul>
          </div>

          <div class="col-md-3">
            <h5>@lang('Customer Service')</h5>
            <ul>
              <a href="{{ url('/contact') }}"><li>@lang('Contact Us')</li></a>
            </ul>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/') }}">
              <img src="{{url('/img/logo/'.@$settings->logoFooter->name)}}" alt="logo footer" />
            </a>

            <div class="icon-logo">
              <ul>
                <a href="{{ @$settings->Facebook }}" target="_blank"><li><i class="fab fa-facebook-f"></i></li></a>
                <a href="{{ @$settings->Twitter }}" target="_blank"><li><i class="fab fa-twitter"></i></li></a>
                <a href="{{ @$settings->YouTube }}" target="_blank"><li><i class="fab fa-youtube"></i></li></a>
                <a href="{{ @$settings->Instegram }}" target="_blank"><li><i class="fab fa-instagram"></i></li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    @yield('js')
  </body>
</html>
