
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
