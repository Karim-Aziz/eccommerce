@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Edit Settings
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
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <form role="form" action="{{url('/siteAdmin/settings/edit')}}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>phone</label>
                            <input name="phone" type="text" class="form-control"
                                value="{{old('phone')? old('phone'): @$settings->phone}}" required>
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input name="email" type="email" class="form-control"
                                value="{{old('email')? old('email'): @$settings->email}}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>location</label>
                            <input name="location" type="text" class="form-control"
                                value="{{old('location')? old('location'): @$settings->location}}" required>
                            @if ($errors->has('location'))
                            <span class="help-block">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>YouTube</label>
                            <input name="YouTube" type="text" class="form-control"
                                value="{{old('YouTube')? old('YouTube'): @$settings->YouTube}}" required>
                            @if ($errors->has('YouTube'))
                            <span class="help-block">
                                <strong>{{ $errors->first('YouTube') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Instegram</label>
                            <input name="Instegram" type="text" class="form-control"
                                value="{{old('Instegram')? old('Instegram'): @$settings->Instegram}}" required>
                            @if ($errors->has('Instegram'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Instegram') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input name="Twitter" type="text" class="form-control"
                                value="{{old('Twitter')? old('Twitter'): @$settings->Twitter}}" required>
                            @if ($errors->has('Twitter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Twitter') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Facebook</label>
                            <input name="Facebook" type="text" class="form-control"
                                value="{{old('Facebook')? old('Facebook'): @$settings->Facebook}}" required>
                            @if ($errors->has('Facebook'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Facebook') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Contact US</label>
                            <textarea id="contact_us" class="form-control ckeditor" name="contact_us"
                                required>{!! old('contact_us') ?  old('contact_us') : @$settings->contact_us !!}</textarea>
                            @if ($errors->has('contact_us'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact_us') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Contact US Arbic</label>
                            <textarea id="contact_us_ar" class="form-control ckeditor" name="contact_us_ar"
                                required>{!! old('contact_us_ar') ?  old('contact_us_ar') : @$settings->contact_us_ar !!}</textarea>
                            @if ($errors->has('contact_us_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact_us_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>footer text</label>
                            <textarea id="footer_text" class="form-control ckeditor" name="footer_text"
                                required>{!! old('footer_text') ?  old('footer_text') : @$settings->footer_text !!}</textarea>
                            @if ($errors->has('footer_text'))
                            <span class="help-block">
                                <strong>{{ $errors->first('footer_text') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>footer text Arbic</label>
                            <textarea id="footer_text_ar" class="form-control ckeditor" name="footer_text_ar"
                                required>{!! old('footer_text_ar') ?  old('footer_text_ar') : @$settings->footer_text_ar !!}</textarea>
                            @if ($errors->has('footer_text_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('footer_text_ar') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <img style=" height: 128px;width: auto;border: 1px solid #ccc; padding: 2px "
                                src="{{ '/img/logo/'. @$settings->logo->name }}">
                            <input name="logo_id" class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label>footer logo</label>
                            <img style=" height: 128px;width: auto;border: 1px solid #ccc; padding: 2px "
                                src="{{ '/img/logo/'. @$settings->logoFooter->name }}">
                            <input name="logo_footer_id" class="form-control" type="file">
                        </div>


                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Save" class="btn btn-primary">
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
