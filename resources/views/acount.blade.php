@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title') Account @endsection
@section('content')
<!-- ================= Start My Acount ================= -->
    <div class="my_acount  @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        @if (\Session::has('success'))
          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success">
                <ul>
                  <li>{!! \Session::get('success') !!}</li>
                </ul>
              </div>
            </div>
          </div>
        @endif
        <h1 class="mt-5 text-center">@lang('My Account')</h1>
        <div class="logoContainer">
          <img style="height: 100px;border-radius: 50%" src="{{ @$user->image->name ? '/img/users/'.$user->image->name : url('/dist/img/user2-160x160.jpg')}}">
        </div>
        <form role="form" action="{{url('/user/edit/'.$user->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="fileContainer sprite">
            <span>@lang('Personal Photo')</span>
            <input type="file" value="Choose File" name="img"/>
            @if ($errors->has('img'))
            <span class="help-block">
                <strong>{{ $errors->first('img') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <label>@lang('full name')</label>
            <input name="name" type="text" class="form-control"
              value="{{old('name')? old('name'): $user->name}}">
              @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
          </div>
          <div class="form-group">
            <label>@lang('Email Address')</label>
            <input name="email" type="mail" class="form-control"
            value="{{old('email')? old('email'): $user->email}}">
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <label>@lang('phone')</label>
            <input type="text" class="form-control" id="phone" placeholder="@lang('phone')" name="phone"
                value="{{old('phone')? old('phone'): $user->phone}}" required>
            @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <label>@lang('Password')</label>
            <input name="password" type="password" class="form-control"
            placeholder="New Password">
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <button type="submit" class="btn btn-block btn-success">@lang('Save')</button>
        </form>
      </div>
    </div>
<!-- ================= End My Acount ================= -->
@endsection

