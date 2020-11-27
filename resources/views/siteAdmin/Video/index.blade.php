@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Videos
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
                    @if ($Videos->count() > 0)
                        @foreach ($Videos as $Video)
                            <div class="modal fade" id="modal-default{{$Video->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit Video</h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/Video/edit/'.$Video->id)}}" method="post" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>video</label>
                                                    <input name="video" type="text" class="form-control"
                                                        value="{{old('video')? old('video'): $Video->video}}">
                                                        @if ($errors->has('video'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('video') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="name" type="text" class="form-control"
                                                        value="{{old('name')? old('name'): $Video->name}}">
                                                        @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>name_ar</label>
                                                    <input name="name_ar" type="text" class="form-control"
                                                        value="{{old('name_ar')? old('name_ar'): $Video->name_ar}}">
                                                        @if ($errors->has('name_ar'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name_ar') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_1</label>
                                                    <input id="info_1" type="text" class="form-control" name="info_1" value="{{old('info_1')? old('info_1'): $Video->info_1}}" required autofocus>

                                                    @if ($errors->has('info_1'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_1') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_1_ar</label>
                                                    <input id="info_1_ar" type="text" class="form-control" name="info_1_ar" value="{{old('info_1_ar')? old('info_1_ar'): $Video->info_1_ar}}" required autofocus>

                                                    @if ($errors->has('info_1_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_1_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_2</label>
                                                    <input id="info_2" type="text" class="form-control" name="info_2" value="{{old('info_2')? old('info_2'): $Video->info_2}}" required autofocus>

                                                    @if ($errors->has('info_2'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_2') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_2_ar</label>
                                                    <input id="info_2_ar" type="text" class="form-control" name="info_2_ar" value="{{old('info_2_ar')? old('info_2_ar'): $Video->info_2_ar}}" required autofocus>

                                                    @if ($errors->has('info_2_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_2_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_3</label>
                                                    <input id="info_3" type="text" class="form-control" name="info_3" value="{{old('info_3')? old('info_3'): $Video->info_3}}" required autofocus>

                                                    @if ($errors->has('info_3'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_3') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_3_ar</label>
                                                    <input id="info_3_ar" type="text" class="form-control" name="info_3_ar" value="{{old('info_3_ar')? old('info_3_ar'): $Video->info_3_ar}}" required autofocus>

                                                    @if ($errors->has('info_3_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_3_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_4</label>
                                                    <input id="info_4" type="text" class="form-control" name="info_4" value="{{old('info_4')? old('info_4'): $Video->info_4}}" required autofocus>

                                                    @if ($errors->has('info_4'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_4') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_4_ar</label>
                                                    <input id="info_4_ar" type="text" class="form-control" name="info_4_ar" value="{{old('info_4_ar')? old('info_4_ar'): $Video->info_4_ar}}" required autofocus>

                                                    @if ($errors->has('info_4_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_4_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_5</label>
                                                    <input id="info_5" type="text" class="form-control" name="info_5" value="{{old('info_5')? old('info_5'): $Video->info_5}}" required autofocus>

                                                    @if ($errors->has('info_5'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_5') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>info_5_ar</label>
                                                    <input id="info_5_ar" type="text" class="form-control" name="info_5_ar" value="{{old('info_5_ar')? old('info_5_ar'): $Video->info_5_ar}}" required autofocus>

                                                    @if ($errors->has('info_5_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('info_5_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="desc" class="form-control ckeditor" name="desc"
                                                        required>{{old('desc')? old('desc'): $Video->desc}}</textarea>
                                                    @if ($errors->has('desc'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Description Arbic</label>
                                                    <textarea id="desc_ar" class="form-control ckeditor" name="desc_ar"
                                                        required>{{old('desc_ar')? old('desc_ar'): $Video->desc_ar}}</textarea>
                                                    @if ($errors->has('desc_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc_ar') }}</strong>
                                                    </span>
                                                    @endif
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
                                        @if ($Videos->count() > 0)
                                        @foreach ($Videos as $Video)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$Video->name}}</td>
                                            <td>{{$Video->name_ar}}</td>

                                            <td>{{$Video->created_at->toDateString()}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$Video->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
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
