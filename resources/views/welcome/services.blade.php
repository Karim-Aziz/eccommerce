@php
    $services = App\services::orderBy('id', 'desc')->get();
@endphp
<!-- =========== Start Services  =========== -->
    <div class="services">
      <div
        class="heading-main text-center mb-5"
        data-aos="zoom-in"
        data-aos-duration="1500"
      >
        <h1 class="text-uppercase">@lang('SERVICES')</h1>
        <p>
          @lang('Our clinic offers all kinds of services and constantly study new technology to add new custom services to the list')
        </p>
      </div>
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          @foreach (@$services as $service)
            <div class="col-md-4">
            <div class="card">
              <a href="services.html">
                <img
                  src="{{ @$service->image->name ? '/img/services/'.$service->image->name : url('/dist/img/services2-160x160.jpg')}}"
                  class="card-img-top"
                  alt="Service 1"
                />
              </a>
              <div class="card-body">
                @if (App::isLocale('ar'))
                  <h5 class="card-title">{{ $service->name_ar }}</h5>
                  <p class="card-text">
                    {!! $service->desc_ar !!}
                  </p>
                @else
                  <h5 class="card-title">{{ $service->name }}</h5>
                  <p class="card-text">
                    {!! $service->desc !!}
                  </p>
                @endif
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- =========== End Services  =========== -->
