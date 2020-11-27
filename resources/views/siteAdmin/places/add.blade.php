@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add Item
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
            <form role="form" action="{{url('/siteAdmin/places/insert')}}" method="post"
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
                            <label>title_ar</label>
                            <input id="title_ar" type="text" class="form-control" name="title_ar" value="{{ old('title_ar') }}"
                                required autofocus>

                            @if ($errors->has('title_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}"
                                required autofocus>

                            @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>price_ar</label>
                            <input id="price_ar" type="text" class="form-control" name="price_ar" value="{{ old('price_ar') }}"
                                required autofocus>

                            @if ($errors->has('price_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>price_after_discount</label>
                            <input id="price_after_discount" type="text" class="form-control" name="price_after_discount" value="{{ old('price_after_discount') }}"
                                required autofocus>

                            @if ($errors->has('price_after_discount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price_after_discount') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>price_after_discount_ar</label>
                            <input id="price_after_discount_ar" type="text" class="form-control" name="price_after_discount_ar" value="{{ old('price_after_discount_ar') }}"
                                required autofocus>

                            @if ($errors->has('price_after_discount_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price_after_discount_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="page_id">Page</label>
                              <select class="form-control" name="page_id" id="page_id">
                                @foreach (App\pages::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            @if ($errors->has('page_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('page_id') }}</strong>
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
