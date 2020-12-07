@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add  Image To Home Slider
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
            <form role="form" action="{{url('/siteAdmin/slider/insert')}}" method="post"
                enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="box-body">

                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" class="form-control" type="file">
                            @if ($errors->has('images'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
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
