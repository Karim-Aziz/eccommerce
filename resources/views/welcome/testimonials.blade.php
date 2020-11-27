<!-- =========== Start Testimonials =========== -->
@php
$Testimonials = App\Testimonial::orderBy('id', 'desc')->get();
@endphp
    <div class="testimonials @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="heading-main text-center mb-5">
          <h1 class="text-uppercase">@lang('Testimonials')</h1>
        </div>

        <div class="row test-info" data-aos="zoom-in" data-aos-duration="1500">
          @if ($Testimonials->count() > 0)
            @foreach ($Testimonials as $Testimonial)
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <b><i class="fas fa-hands-helping"></i></b>
                    @if (App::isLocale('ar'))
                      <p class="card-text">
                        {!! @$Testimonial->desc_ar !!}
                      </p>
                      <h5 class="card-title">{{ @$Testimonial->name_ar }}</h5>
                    @else
                      <p class="card-text">
                        {!! @$Testimonial->desc !!}
                      </p>
                      <h5 class="card-title">{{ @$Testimonial->name }}</h5>
                    @endif
                    <img
                      src="images/testimonials/1.png"
                      alt="test-1"
                      class="rounded-circle"
                    />
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
    <!-- =========== End Testimonials =========== -->
