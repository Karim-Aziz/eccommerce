@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title', 'services')
@section('content')

<!--  ======================= Start Services ============================== -->
<div id="services" class="services wow fadeInUp">
    <h1 class="text-center border-buttom">@lang('Services')</h1>
    <div class="container">
        <div class="service-box">
            @if (App::isLocale('ar'))
            <div class="row">

                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/1.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service1_ar }}</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/2.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service2_ar }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/3.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service3_ar }}</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/4.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service4_ar }}</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/5.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service5_ar }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/6.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service6_ar }}</h5>
                        </div>
                    </div>
                </div>

            </div>

            @else
            <div class="row">

                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/1.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service1 }}</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/2.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service2 }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/3.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service3 }}</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/4.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service4 }}</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/5.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service5 }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="media">
                        <img src="img/services/6.png" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $services->service6 }}</h5>
                        </div>
                    </div>
                </div>

            </div>
            @endif
        </div>
    </div>
</div>
<!--  ======================= End Services ============================== -->
@endsection
