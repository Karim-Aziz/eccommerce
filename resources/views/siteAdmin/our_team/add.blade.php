@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add our_team
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
            <form role="form" action="{{url('/siteAdmin/our_team/insert')}}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>name_ar</label>
                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{ old('name_ar') }}" required autofocus>

                            @if ($errors->has('name_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>postion</label>
                            <input id="postion" type="text" class="form-control" name="postion" value="{{ old('postion') }}" required autofocus>

                            @if ($errors->has('postion'))
                            <span class="help-block">
                                <strong>{{ $errors->first('postion') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>postion_ar</label>
                            <input id="postion_ar" type="text" class="form-control" name="postion_ar" value="{{ old('postion_ar') }}" required autofocus>

                            @if ($errors->has('postion_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('postion_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="desc" class="form-control ckeditor" name="desc"
                                required>{{old('desc')}}</textarea>
                            @if ($errors->has('desc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description Arbic</label>
                            <textarea id="desc_ar" class="form-control ckeditor" name="desc_ar"
                                required>{{old('desc_ar')}}</textarea>
                            @if ($errors->has('desc_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('desc_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Photo</label>
                            <input name="image_id" class="form-control" type="file">
                        </div>

                        
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Add" class="btn btn-primary">
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
<script type="application/javascript">
    $(document).ready(function () {
        CKEDITOR.config.contentsLangDirection = 'rtl';
    });
</script>
@endsection