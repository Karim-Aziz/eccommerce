@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title') Login @endsection
@section('content')
<div class="container">
<div class="login @if (App::isLocale('ar'))  text-right  @endif">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
        <a
            class="nav-link active"
            id="pills-home-tab"
            data-toggle="pill"
            href="#login"
            role="tab"
            aria-controls="pills-home"
            aria-selected="true"
            >@lang('Login') </a
        >
        </li>
        <li class="nav-item">
        <a
            class="nav-link"
            id="pills-profile-tab"
            data-toggle="pill"
            href="#register"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >@lang('Create Account')
        </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div
        class="tab-pane fade show active"
        id="login"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
        >
        <div class="row">
            <div class="col-md-12">
            <!-- Start Form Login -->
            <form class="custom-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" >@lang('Email Address')</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                        autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" >@lang('Password')</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn-block">@lang('Sign In')</button>
            </form>
            <!-- End Form Login -->
            </div>
        </div>
        </div>
        <div
        class="tab-pane fade"
        id="register"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
        >
        <div class="row">
            <div class="col-md-12">
            <!-- Start Form Login -->
            <form role="form" action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="custom-form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>@lang('full name')</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>@lang('Email Address')</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>@lang('Password')</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>@lang('Personal Photo')</label>
                    <input name="img" class="form-control" type="file">
                    <span class="help-block">
                        <strong>{{ $errors->first('img') }}</strong>
                    </span>
                </div>
                <button type="submit" class="btn-block">
                    @lang('Create Account')
                </button>
            </form>
            <!-- End Form Login -->
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection

