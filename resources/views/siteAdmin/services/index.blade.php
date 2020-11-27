@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        servicess
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
                    @if ($servicess->count() > 0)
                        @foreach ($servicess as $services)
                            <div class="modal fade" id="modal-default{{$services->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit services</h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/services/edit/'.$services->id)}}" method="post" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="name" type="text" class="form-control"
                                                        value="{{old('name')? old('name'): $services->name}}">
                                                        @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>name_ar</label>
                                                    <input name="name_ar" type="text" class="form-control"
                                                        value="{{old('name_ar')? old('name_ar'): $services->name_ar}}">
                                                        @if ($errors->has('name_ar'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name_ar') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="desc" class="form-control ckeditor" name="desc"
                                                        required>{{old('desc')? old('desc'): $services->desc}}</textarea>
                                                    @if ($errors->has('desc'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Description Arbic</label>
                                                    <textarea id="desc_ar" class="form-control ckeditor" name="desc_ar"
                                                        required>{{old('desc_ar')? old('desc_ar'): $services->desc_ar}}</textarea>
                                                    @if ($errors->has('desc_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>Photo</label>
                                                    <img style="height: 100px;"
                                                        src="{{ @$services->image->name ? '/img/services/'.$services->image->name : url('/dist/img/services2-160x160.jpg')}}">
                                                    <input name="image_id" class="form-control" type="file">
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
                                                aria-label="Name: activate to sort column descending">Name</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="name_ar: activate to sort column descending">name_ar</th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Date
                                                </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($servicess->count() > 0)
                                        @foreach ($servicess as $services)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$services->name}}</td>
                                            <td>{{$services->name_ar}}</td>

                                            <td>{{$services->created_at->toDateString()}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$services->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('/siteAdmin/services/delete/'. $services->id)}}"
                                                    class="btn btn-danger confirm" title="delete" style="margin-bottom: 3px">
                                                    <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                                </a>
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
