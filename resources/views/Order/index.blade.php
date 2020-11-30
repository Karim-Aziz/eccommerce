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
