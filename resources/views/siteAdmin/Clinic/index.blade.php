@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
       Clinics
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
                    @if ($Clinics->count() > 0)
                        @foreach ($Clinics as $Clinic)
                            <div class="modal fade" id="modal-default{{$Clinic->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit Clinic </h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/Clinic/edit/'.$Clinic->id)}}" method="post" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>title</label>
                                                    <input name="title" type="text" class="form-control"
                                                        value="{{old('title')? old('title'): $Clinic->title}}">
                                                    @if ($errors->has('title'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>title Ar</label>
                                                    <input name="title_ar" type="text" class="form-control"
                                                        value="{{old('title_ar')? old('title_ar'): $Clinic->title_ar}}">
                                                    @if ($errors->has('title_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('title_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>time</label>
                                                    <input name="time" type="text" class="form-control"
                                                        value="{{old('time')? old('time'): $Clinic->time}}">
                                                    @if ($errors->has('time'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('time') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>time Ar</label>
                                                    <input name="time_ar" type="text" class="form-control"
                                                        value="{{old('time_ar')? old('time_ar'): $Clinic->time_ar}}">
                                                    @if ($errors->has('time_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('time_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>address</label>
                                                    <input name="address" type="text" class="form-control"
                                                        value="{{old('address')? old('address'): $Clinic->address}}">
                                                    @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>address Ar</label>
                                                    <input name="address_ar" type="text" class="form-control"
                                                        value="{{old('address_ar')? old('address_ar'): $Clinic->address_ar}}">
                                                    @if ($errors->has('address_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>phone</label>
                                                    <input name="phone" type="text" class="form-control"
                                                        value="{{old('phone')? old('phone'): $Clinic->phone}}">
                                                    @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone') }}</strong>
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
                                                aria-label="title: activate to sort column descending">title</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="title: activate to sort column descending">title Ar</th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Date: activate to sort column ascending">Date
                                                </th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($Clinics->count() > 0)
                                        @foreach ($Clinics as $Clinic)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$Clinic->title}}</td>
                                            <td class="sorting_1">{{$Clinic->title_ar}}</td>
                                            <td>{{$Clinic->created_at->toDateString()}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$Clinic->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('/siteAdmin/Clinic/delete/'. $Clinic->id)}}"
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
