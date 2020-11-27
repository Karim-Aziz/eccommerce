@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

@extends('layouts.app')
@section('title', @$place->name)
@section('content')

<style>
    .background_section {
      background: linear-gradient(rgb(0 0 0 / 65%), rgb(67 49 44)), url("{{ url('/images/details.jpg')}}");
      height: 400px;
      width: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
  </style>
<!-- Start background image -->
  <div class="background_section"></div>
<!-- End background image -->
<!-- Start Details Products -->
    <div class="details_product @if (App::isLocale('ar'))  text-right  @endif ">
      <div class="container">
        @if(session()->has('success'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>
            </div>
          </div>
        @endif
        <div class="row">

        @if ($place)
          <div class="col-md-5">
            <div class="slider_images">
              <div class="owl-carousel owl-theme" id="details_product">
              @foreach ( @$place->images as $image)
                <div class="item">

                  <img src="{{ @$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg')}}" alt="{{@$place->name}}" />
                </div>
              @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-7">

            <div class="det_info">
              <h5 class="mb-4 mt-4">
                @if (App::isLocale('ar'))
                  {{ @$place->title_ar }}
                @else
                  {{ @$place->title }}
                @endif
              </h5>
              <b>
                <span>
                  @if (App::isLocale('ar'))
                    {{ @$place->price_after_discount_ar }}
                  @else
                    {{ @$place->price_after_discount }}
                  @endif
                </span>
                <span class="sale">
                  @if (App::isLocale('ar'))
                    {{ @$place->price_ar }}
                  @else
                    {{ @$place->price }}
                  @endif
                </span>
              </b>
              <p class="mt-4">
                @if (App::isLocale('ar'))
                  {!! @$place->desc_ar !!}
                @else
                  {!! @$place->desc !!}
                @endif
              </p>
              <div class='info-buttons'>
                <a class="back" href="{{ url('/')}}">@lang('Back To Home')</a>
                <!-- Start Butom Order -->
                <!-- Button trigger modal -->
                <button
                  class="order_mod"
                  type="button"
                  data-toggle="modal"
                  data-target="#staticBackdrop"
                >
                  @lang('Add Your Ordar')
                </button>
              </div>
              <!-- Modal -->
              <div
                class="modal fade"
                id="staticBackdrop"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form role="form" class="text-center" action="{{ url('/requests/'.@$place->id) }}" method="post">
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
                                  <input type="text" class="form-control" id="number" placeholder="@lang('number')" name="number"
                                      value="{{old('number')}}" required>
                                  @if ($errors->has('number'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('number') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                              <div class="form-group">
                                  <input type="text" class="form-control" id="Address" placeholder="@lang('Address')"
                                      name="Address" value="{{old('Address')}}" required>
                                  @if ($errors->has('Address'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('Address') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <select class="custom-select mb-3" name="Size">
                              <option selected value="0">@lang('Size')</option>
                              <option value="Sm">Sm</option>
                              <option value="Lg">Lg</option>
                              <option value="Xl">Xl</option>
                              <option value="Xxl">Xxl</option>
                            </select>
                            @if ($errors->has('Size'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Size') }}</strong>
                            </span>
                            @endif
                          </div>
                          <div class="col-md-6">
                            <select class="custom-select mb-3" name="Color">
                              <option selected value="0">@lang('Color')</option>
                              <option value="Red">Red</option>
                              <option value="Black">Black</option>
                              <option value="Orange">Orange</option>
                              <option value="Other">Other</option>
                            </select>
                            @if ($errors->has('Color'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Color') }}</strong>
                            </span>
                            @endif
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
                        <button type="submit" class="btn-block send_form">@lang('Send')</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
    <!-- End Details Products -->


@endsection
