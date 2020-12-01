@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','My Order')
@section('content')
<!-- ================= Start Order ================= -->
<div class="orders @if (App::isLocale('ar'))  text-right  @endif">
    <div class="container">
    <div class="title-section mb-5">
        <h2 class="text-uppercase">@lang('My Orders')</h2>
    </div>
    @if ($userOrders->count() > 0)
        @foreach ($userOrders as $Order)
        <div class="order-det">
            <div class="row">
                <div class="col-md-6">
                <div class="media">
                    <img src="{{ url('/img/products/4.jpg') }}" class="mr-3" alt="..." />
                    <div class="media-body">
                    <!-- h6 class="mt-0">GREEN DRESS WITH DETAILS</!-->
                    <p>{{ $Order->created_at->diffForHumans() }}</p>
                    <p> @lang('Order number') : <b>{{ $Order->id }}</b></p>
                    <p>
                        @lang('Payment method') : <b><b> @lang('Web Site') </b></b>
                    </p>
                    <p>
                        @lang('Total') : <b><b>{{ $Order->amount }}</b></b>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                @foreach ($Order->places as $place)
                <div class="col-md-6">
                    <div class="media">
                        @php
                        if (@$place->images ) {
                            foreach ($place->images as $image) {
                            $src =  '/img/places_images/'.$image->name ;
                            break;
                            }
                        } else {
                            $src = null;
                        }
                        @endphp
                        <img src="{{ @$src ? @$src : url('/dist/img/user2-160x160.jpg') }}" alt="{{@$place->name}}" class="mr-3" />
                        <div class="media-body">
                            <h6 class="mt-0">
                                @if (App::isLocale('ar'))
                                    {{ @$place->title_ar }}
                                @else
                                    {{ @$place->title }}
                                @endif
                            </h6>
                            <h6 class="mt-0">
                                <i class="far fa-check-circle"></i> @lang('Request completed')
                            </h6>
                            <a href="{{ url('/pages/place/'.$place->id)}}">
                                <h6 class="mt-0">
                                <i class="fas fa-shopping-cart"></i> @lang('Buy again')
                                </h6>
                            </a>
                            <a href="#">
                                <h6 class="mt-0">
                                <i class="fas fa-exclamation-circle"></i> @lang('Report a problem')
                                </h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr style="width:100%; height: 1px; border-buttom: 1px solid #ccc;">
        @endforeach
    @else
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <strong>@lang('No Results')</strong>
            </div>
        </div>
    </div>

    @endif
    </div>
</div>
<div class="overlay-load"></div>
<!-- ================= End Order ================= -->
@endsection
