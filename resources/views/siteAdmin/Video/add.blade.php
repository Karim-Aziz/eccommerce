@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add Video
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
            <form role="form" action="{{url('/siteAdmin/Video/insert')}}" method="post"
                enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>video</label>
                            <input id="video" type="text" class="form-control" name="video" value="{{ old('video') }}" required autofocus>

                            @if ($errors->has('video'))
                            <span class="help-block">
                                <strong>{{ $errors->first('video') }}</strong>
                            </span>
                            @endif
                        </div>

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
                            <label>info_1</label>
                            <input id="info_1" type="text" class="form-control" name="info_1" value="{{ old('info_1') }}" required autofocus>

                            @if ($errors->has('info_1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_1') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_1_ar</label>
                            <input id="info_1_ar" type="text" class="form-control" name="info_1_ar" value="{{ old('info_1_ar') }}" required autofocus>

                            @if ($errors->has('info_1_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_1_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_2</label>
                            <input id="info_2" type="text" class="form-control" name="info_2" value="{{ old('info_2') }}" required autofocus>

                            @if ($errors->has('info_2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_2') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_2_ar</label>
                            <input id="info_2_ar" type="text" class="form-control" name="info_2_ar" value="{{ old('info_2_ar') }}" required autofocus>

                            @if ($errors->has('info_2_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_2_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_3</label>
                            <input id="info_3" type="text" class="form-control" name="info_3" value="{{ old('info_3') }}" required autofocus>

                            @if ($errors->has('info_3'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_3') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_3_ar</label>
                            <input id="info_3_ar" type="text" class="form-control" name="info_3_ar" value="{{ old('info_3_ar') }}" required autofocus>

                            @if ($errors->has('info_3_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_3_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_4</label>
                            <input id="info_4" type="text" class="form-control" name="info_4" value="{{ old('info_4') }}" required autofocus>

                            @if ($errors->has('info_4'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_4') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_4_ar</label>
                            <input id="info_4_ar" type="text" class="form-control" name="info_4_ar" value="{{ old('info_4_ar') }}" required autofocus>

                            @if ($errors->has('info_4_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_4_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_5</label>
                            <input id="info_5" type="text" class="form-control" name="info_5" value="{{ old('info_5') }}" required autofocus>

                            @if ($errors->has('info_5'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_5') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>info_5_ar</label>
                            <input id="info_5_ar" type="text" class="form-control" name="info_5_ar" value="{{ old('info_5_ar') }}" required autofocus>

                            @if ($errors->has('info_5_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('info_5_ar') }}</strong>
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
<script type="application/javascript">
    $(document).ready(function () {
        CKEDITOR.config.contentsLangDirection = 'rtl';
    });
</script>
@endsection
