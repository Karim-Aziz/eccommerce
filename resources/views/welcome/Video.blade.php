<!-- =========== Start Video  =========== -->
@php
$Video = App\Video::first();
@endphp
    <div class="about @if (App::isLocale('ar'))  text-right  @endif" data-aos="zoom-in" data-aos-duration="1500" >
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="about-info">
              @if (!App::isLocale('ar'))
                <h5>{{  @$Video->name }}</h5>
                  {!!  @$Video->desc !!}
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_1 }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_2 }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_3 }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_4 }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_5 }}
                </p>
              @else
                <h5>{{  @$Video->name_ar }}</h5>
                <p>
                  {!!  @$Video->desc_ar !!}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_1_ar }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_2_ar }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_3_ar }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_4_ar }}
                </p>
                <p>
                  <i class="fas fa-check"></i> {{  @$Video->info_5_ar }}
                </p>
              @endif
              <button>
                <a href="{{url('/about_us')}}">
                  @lang('Learn more')  <i class="fas fa-plus"></i>
                </a>
              </button>
            </div>
          </div>

          <div class="col-md-7">
            <div class="video">
              <iframe
                src="{{  @$Video->video }}"
                frameborder="0"
                allow="autoplay; fullscreen"
                allowfullscreen=""
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Video  =========== -->
