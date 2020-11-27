@php
$about_as = App\about_as::first();
@endphp

<!-- ================================================================================ -->
    <!-- Start About Section -->
    <div class="about @if (App::isLocale('ar'))  text-right  @endif"" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="about-info">
              <h3>@lang('About Us')</h3>
              <p class="display-4">
                @if (App::isLocale('ar'))
                {!! @$about_as->about_company_ar !!}
                @else
                {!! @$about_as->about_company !!}
                @endif
              </p>
            </div>
          </div>

          <div class="col-md-5">
            <div class="about-img">
              <img src="{{ @$user->image->name ? '/img/about_as/'.$about_as->image->name : url('/images/back_about.png')}}" alt="about image" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Section -->
