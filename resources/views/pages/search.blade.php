@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

@extends('layouts.app')
@section('title', 'Search')
@section('content')
<!-- =========== Start Services Page =========== -->
    <div class="all-services @if (App::isLocale('ar'))  text-right  @endif ">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-12">
            <div class="show-ser">

              <h4>@lang('Search Results')</h4>
              @if (count($places) > 0)
                <ul class="list-group list-group-flush">
                    @foreach ($places as $place)
                        <li class="list-group-item list-group-item-action list-group-item-light" >
                        @if (App::isLocale('ar'))
                            <a href="{{ url('/pages/place/'.$place->id)}}">{{ $place->title_ar }}</a>
                        @else
                            <a href="{{ url('/pages/place/'.$place->id)}}">{{ $place->title }}</a>
                        @endif
                        </li>
                    @endforeach
                </ul>
              @else
                <div class="alert alert-danger" role="alert">
                    <strong>@lang('No Results')</strong>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Services Page =========== -->


@endsection
