<!-- ================================================================================ -->
    <!-- Start Header  -->
    <nav class="navbar navbar-expand-md" id="topheader">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{url('/img/logo/'.@$settings->logo->name)}}" alt="logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link ml-2 active" href="{{ url('/') }}#">@lang('Home')</a>
            <a class="nav-link ml-2" href="{{ url('/') }}#about">@lang('About')</a>
            <a class="nav-link ml-2" href="{{ url('/') }}#all-products">@lang('Our Prodect')</a>
            <a class="nav-link ml-2" href="{{ url('/') }}#contact">@lang('Contact')</a>
          </div>
          <div class="lang">
            <div class="dropdown">
              <a
                class="btn btn-secondary btn-lan dropdown-toggle"
                href="#"
                role="button"
                id="dropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
              @lang('Language')
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @if (App::isLocale('en'))  active  @endif" href="{{url('/en')}}">En</a>
                <a class="dropdown-item @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">AR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

