@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

@extends('layouts.app')
@section('title', @$page->name)
@section('content')
<!-- =========== Start Services Page =========== -->
    <div class="all-services @if (App::isLocale('ar'))  text-right  @endif ">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-9">
            @if ($place)
              <div class="all-ser-info">
                <img src="{{ @$place->image->name ? '/img/places_images/'.$place->image->name : url('/dist/img/user2-160x160.jpg')}}" alt="Services image" />
                <h2>
                  @if (App::isLocale('ar'))
                    {{ @$place->title_ar }}
                  @else
                    {{ @$place->title }}
                  @endif
                </h2>
                @if (App::isLocale('ar'))
                  {!! @$place->desc_ar !!}
                @else
                  {!! @$place->desc !!}
                @endif
              </div>
            @endif

          </div>
          <div class="col-md-3">
            <div class="show-ser">
              <form role="form" class="form-inline" action="{{url('/pages/search')}}" method="get">
                <input class="form-control" placeholder="Search..." name="title" />
                {{ csrf_field() }}
                <button type="submit"><i class="fas fa-search"></i></button>
              </form>
              <h4>@lang('All Services')</h4>
              <ul class="list-group list-group-flush">
                @if (count($places) > 0)
                    @foreach ($places as $place)
                      <li class="list-group-item list-group-item-action list-group-item-light" >
                        @if (App::isLocale('ar'))
                          <a href="{{ url('/pages/place/'.$place->id)}}">{{ $place->title_ar }}</a>
                        @else
                          <a href="{{ url('/pages/place/'.$place->id)}}">{{ $place->title }}</a>
                        @endif
                      </li>
                    @endforeach
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Services Page =========== -->


@endsection
