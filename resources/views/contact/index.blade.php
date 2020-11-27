@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title') Contact Us @endsection
@section('content')
    <div class="contact @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="con-bac">
          <div class="row" data-aos="zoom-in" data-aos-duration="1500">
            <div class="col-md-7">
              <div class="contact-info">
                <h1>@lang('Contact Us')</h1>
                <p>
                  @if (App::isLocale('ar'))
                    {!! @$settings->contact_us_ar !!}
                  @else
                    {!! @$settings->contact_us !!}
                  @endif
                </p>
                @if(session()->has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
                @endif
                <form role="form" class="text-center" action="{{url('/contact/insert')}}" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="@lang('Name')" name="name"
                                value="{{old('name')}}" required>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="@lang('phone')" name="phone"
                                value="{{old('phone')}}" required>
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="@lang('Email')"
                                name="email" value="{{old('email')}}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" id="message" name="message"
                                placeholder="@lang('Your Message')">{{old('message')}}</textarea>
                            @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                  </div>
                  <button type="submit" class="btn-block">@lang('Send')</button>
                </form>
              </div>
            </div>
            <div class="col-md-5">
              <img class="mt-5" src="images/contact.png" alt="" srcset="" />
            </div>
          </div>
        </div>

        <!-- Start Map -->
        <div class="map mt-5">
          <div class="heading-main">
            <h4 class="text-uppercase">
              <i class="fas fa-search-location"></i> @lang('My Locatins')
            </h4>
          </div>
          <div style="width: 100%">
            <iframe
              width="100%"
              height="600"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=El%20Sudan%20st%20Cairo,%20Cairo%20Governorate,%20Egypt%2013611+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ></iframe
            ><a href="https://www.maps.ie/route-planner.htm">Journey Planner</a>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Contact Page =========== -->

    <!-- =========== Start All Clinic  =========== -->
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


  @endsection

