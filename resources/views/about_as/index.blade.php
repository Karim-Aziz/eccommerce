@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','About As')
@section('content')

  <!-- =========== Start About Page =========== -->
    <div class="about-page @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-4">
            <div class="media mb-4">
              <i class="fas fa-user-md rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">@lang('Holds')</h5>
                @if (App::isLocale('ar'))
                  {{ @$about_as->hold_1_ar }}
                @else
                  {{ @$about_as->hold_1 }}
                @endif
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-book-open rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">@lang('Holds')</h5>
                @if (App::isLocale('ar'))
                  {{ @$about_as->hold_2_ar }}
                @else
                  {{ @$about_as->hold_2 }}
                @endif
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-calendar-alt rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">@lang('Holds')</h5>
                @if (App::isLocale('ar'))
                  {{ @$about_as->hold_3_ar }}
                @else
                  {{ @$about_as->hold_3 }}
                @endif
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <img src="images/pr_doc.png" alt="" />
          </div>

          <div class="col-md-4">
            <div class="media mb-4">
              <i class="fas fa-stethoscope rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">@lang('Holds')</h5>
                @if (App::isLocale('ar'))
                  {{ @$about_as->hold_4_ar }}
                @else
                  {{ @$about_as->hold_4 }}
                @endif
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-user-graduate rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">@lang('Holds')</h5>
                @if (App::isLocale('ar'))
                  {{ @$about_as->hold_5_ar }}
                @else
                  {{ @$about_as->hold_5 }}
                @endif
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-users rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">@lang('Holds')</h5>
                @if (App::isLocale('ar'))
                  {{ @$about_as->hold_6_ar }}
                @else
                  {{ @$about_as->hold_6 }}
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End About Page =========== -->

    <<!-- =========== Start Video  =========== -->
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

@endsection
