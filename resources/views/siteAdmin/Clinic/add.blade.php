@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add Clinic
    </h1>
</section>
<div class="row">
    <div class="col-sm-12">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
    </div>
</div>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <form role="form" action="{{url('/siteAdmin/Clinic/insert')}}" method="post"
                enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>title</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"
                                required autofocus>

                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>title Ar</label>
                            <input id="title_ar" type="text" class="form-control" name="title_ar"
                                value="{{ old('title_ar') }}" required autofocus>

                            @if ($errors->has('title_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>time</label>
                            <input id="time" type="text" class="form-control" name="time" value="{{ old('time') }}"
                                required autofocus>

                            @if ($errors->has('time'))
                            <span class="help-block">
                                <strong>{{ $errors->first('time') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>time Ar</label>
                            <input id="time_ar" type="text" class="form-control" name="time_ar"
                                value="{{ old('time_ar') }}" required autofocus>

                            @if ($errors->has('time_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('time_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>address</label>
                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}"
                                required autofocus>

                            @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>address Ar</label>
                            <input id="address_ar" type="text" class="form-control" name="address_ar"
                                value="{{ old('address_ar') }}" required autofocus>

                            @if ($errors->has('address_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address_ar') }}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>phone</label>
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                required autofocus>

                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Add" class="btn btn-primary" >
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
