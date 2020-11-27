@php
    $Clinics = App\Clinic::orderBy('id', 'desc')->get();
@endphp
<div class="all-clinic @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="heading-main text-center mb-5">
          <h1 class="text-uppercase">@lang('All Clinics')</h1>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          @if (count($Clinics) > 0)
            @foreach (@$Clinics as $Clinic)
              @if (App::isLocale('ar'))
                <div class="col-lg-4">
                  <div class="clinic-info">
                    <h5 class="text-center">{{ $Clinic->title_ar }}</h5>
                    <ul class="list-group">
                      <li>
                        <i class="far fa-calendar-check"></i> {{ $Clinic->time_ar }}
                      </li>
                      <li><i class="fas fa-phone-alt"></i>  {{ $Clinic->phone }}</li>
                      <li><i class="fas fa-location-arrow"></i>  {{ $Clinic->address_ar }}</li>
                    </ul>
                  </div>
                </div>
              @else
                <div class="col-lg-4">
                  <div class="clinic-info">
                    <h5 class="text-center">{{ $Clinic->title }}</h5>
                    <ul class="list-group">
                      <li>
                        <i class="far fa-calendar-check"></i> {{ $Clinic->time }}
                      </li>
                      <li><i class="fas fa-phone-alt"></i>  {{ $Clinic->phone }}</li>
                      <li><i class="fas fa-location-arrow"></i>  {{ $Clinic->address }}</li>
                    </ul>
                  </div>
                </div>
              @endif
            @endforeach
          @endif



        </div>
      </div>
    </div>
