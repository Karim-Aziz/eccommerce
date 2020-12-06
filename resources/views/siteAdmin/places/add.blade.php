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
                            <label>sale</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sale" value="1" {{ old('sale') == 1 ? 'checked':''}}> sale
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sale" value="0" {{ old('sale') == 0 ? 'checked':''}}> not sale
                                </label>
                            </div>
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
                            <label>Colors</label>
                            <select name="color[]" class="form-control select2" multiple="multiple" data-placeholder="Select one atleast" placeholder="Select one atleast" style="width: 100%;">
                            @foreach (App\Color::all() as $item)
                                @if (is_array(old('color')))
                                    <option  value="{{$item->id}}" @if (  in_array($item->id, old('color'))) selected @endif>{{$item->name}}</option>
                                @else
                                    <option  value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <select name="size[]" class="form-control select2" multiple="multiple" data-placeholder="Select one atleast" placeholder="Select one atleast" style="width: 100%;">
                            @foreach (App\Size::all() as $item)
                                @if (is_array(old('size')))
                                    <option  value="{{$item->id}}" @if (  in_array($item->id, old('size'))) selected @endif>{{$item->name}}</option>
                                @else
                                    <option  value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                            </select>
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
                        <div class="form-group">
                            <label>review</label>
                            <textarea id="review" class="form-control ckeditor" name="review"
                                required>{{old('review')}}</textarea>
                            @if ($errors->has('review'))
                            <span class="help-block">
                                <strong>{{ $errors->first('review') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>review Arbic</label>
                            <textarea id="review_ar" class="form-control ckeditor" name="review_ar"
                                required>{{old('review_ar')}}</textarea>
                            @if ($errors->has('review_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('review_ar') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>shipping</label>
                            <textarea id="shipping" class="form-control ckeditor" name="shipping"
                                required>{{old('shipping')}}</textarea>
                            @if ($errors->has('shipping'))
                            <span class="help-block">
                                <strong>{{ $errors->first('shipping') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>shipping Arbic</label>
                            <textarea id="shipping_ar" class="form-control ckeditor" name="shipping_ar"
                                required>{{old('shipping_ar')}}</textarea>
                            @if ($errors->has('shipping_ar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('shipping_ar') }}</strong>
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
        $('.select2').select2({
             placeholder: "Select a state"
        });
        $('.select3').select2({
             placeholder: "Select a state"
        });
    });

</script>
@endsection
@section('css')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #3c8dbc;
            border-color: #367fa9;
            padding: 1px 10px;
            color: #fff;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            margin-right: 5px;
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
@endsection
