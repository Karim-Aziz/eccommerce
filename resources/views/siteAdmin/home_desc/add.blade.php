@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add Home Slider and Images
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
            <form role="form" action="{{url('/siteAdmin/home_slider/insert')}}" method="post"
                enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="desc" class="form-control ckeditor" name="desc"
                                required>{{ old('desc') }}</textarea>
                            @if ($errors->has('desc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Images</label>
                            <input name="images[]" class="form-control" type="file" multiple="multiple">
                            @if ($errors->has('images'))
                            <span class="help-block">
                                <strong>{{ $errors->first('images') }}</strong>
                            </span>
                            @endif
                            @if ($errors->has('images.*'))
                            <span class="help-block">
                                <strong>{{ $errors->first('images.*') }}</strong>
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


@section('js')
    <script src="{{ url('/ckeditor/ckeditor.js') }}"></script>
    <script type="application/javascript" >
        $(document).ready(function (){
            CKEDITOR.config.contentsLangDirection = 'rtl';            
        });
    </script>
@endsection