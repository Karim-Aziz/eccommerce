@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title', 'our_team')
@section('content')
@if ($our_team->count() > 0)
<!--  ======================= Start Customer ======================= -->
<section id="team" class="testimonial-area section-padding4 wow fadeInRightBig mb-5">
    <h1 class="text-center border-buttom">@lang('Our team')</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-slider owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-5700px, 0px, 0px); transition: all 1s ease 0s; width: 8550px;">
                            @if (App::isLocale('ar'))
                            @foreach ($our_team as $item)
                            <div class="owl-item " style="width: 540px; margin-right: 30px;">
                                <div class="single-slide d-sm-flex">
                                    <div class="customer-img mr-4 mb-4 mb-sm-0">
                                        <img src="{{url('/img/our_team/'.@$item->image->name)}}" alt="">
                                    </div>
                                    <div class="customer-text">
                                        <h5>{{ $item->name_ar }}</h5>
                                        <span><i>{{ $item->postion_ar }}</i></span>
                                        <p class="pt-3">
                                            {!! $item->desc_ar !!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @else
                            @foreach ($our_team as $item)
                            <div class="owl-item " style="width: 540px; margin-right: 30px;">
                                <div class="single-slide d-sm-flex">
                                    <div class="customer-img mr-4 mb-4 mb-sm-0">
                                        <img src="{{url('/img/our_team/'.@$item->image->name)}}" alt="">
                                    </div>
                                    <div class="customer-text">
                                        <h5>{{ $item->name }}</h5>
                                        <span><i>{{ $item->postion }}</i></span>
                                        <p class="pt-3">
                                            {!! $item->desc !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  ======================= End Customer ======================= -->
@endif
@endsection

