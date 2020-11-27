<!-- ================= Start Top Bar ================= -->
<div class="top-bar">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-10 @if (App::isLocale('ar'))  text-right  @endif">
          <div class="other-link">
            @if (Auth::check())
              <a href="{{ url('/my_acount') }}">@lang('My Account')</a>
            @else
              <a href="{{ url('/register') }}">@lang('Login')</a>
            @endif

            <span>|</span>
            <a href="{{ url('/cart') }}" >
            @lang('My Cart') <i class="fas fa-shopping-cart"></i>
            </a>
            <span>|</span>
            <a href="{{ url('/order') }}">@lang('My Orders')</a>
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
            <a class="nav-link active" href="{{ url('/') }}#">@lang('Home')</a>
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

