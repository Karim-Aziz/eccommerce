@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Home Description
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
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    @if ($home_descs->count() > 0)
                        @foreach ($home_descs as $home_desc)
                            <div class="modal fade" id="modal-default{{$home_desc->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit Home Description </h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/home_desc/edit/'.$home_desc->id)}}"
                                            method="post"
                                                enctype="multipart/form-data">
                                            
                                            {{ csrf_field() }}
                                            <div class="box-body">

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="desc" class="form-control ckeditor" name="desc"
                                                        required>{{old('desc')? old('desc'): $home_desc->desc}}</textarea>
                                                    @if ($errors->has('desc'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Description Arbic</label>
                                                    <textarea id="desc_ar" class="form-control ckeditor" name="desc_ar" required>{{old('desc_ar')? old('desc_ar'): $home_desc->desc_ar}}</textarea>
                                                    @if ($errors->has('desc_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>Photo</label>
                                                    <img style="height: 128px;width:128px;border-radius: 3px;padding:2px; border:1px solid #ccc;"
                                                        src="{{ @$home_desc->image ? '/img/home_desc/'.$home_desc->image : url('/img/bac-img.jpg')}}">
                                                    <input name="image" class="form-control" type="file">
                                                </div>
                                                <div class="box-footer">
                                                    <input type="submit" value="update" class="btn btn-primary" >
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        @endforeach
                    @endif

                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover dataTable no-footer"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="Description Arbic: activate to sort column
                                                descending">Description Arbic</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" 
                                                aria-label="Description: activate to sort column ascending">Description
                                                </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" 
                                                aria-label="Image: activate to sort column ascending">Image
                                                </th>
                                            
                                            
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" 
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($home_descs->count() > 0)
                                        @foreach ($home_descs as $home_desc)
                                        <tr role="row" class="odd">
                                            <td>{!! $home_desc->desc_ar !!}</td>
                                            <td>{!!$home_desc->desc!!}</td>
                                            <td><img style="height: 128px;width:128px;border-radius: 3px;padding:2px; border:1px solid #ccc;"
                                                    src="{{ @$home_desc->image ? '/img/home_desc/'.$home_desc->image : url('/img/bac-img.jpg')}}">
                                            </td>

                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$home_desc->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                {{-- 
                                                <a href="{{url('/siteAdmin/home_desc/delete/'. $home_desc->id)}}"
                                                    class="btn btn-danger confirm" title="delete" style="margin-bottom: 3px">
                                                    <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                                </a>
                                                --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>

                                </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
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