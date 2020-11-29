@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        brands
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
                    @if ($brands->count() > 0)
                        @foreach ($brands as $brand)
                            <div class="modal fade" id="modal-default{{$brand->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit brand</h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/brand/edit/'.$brand->id)}}" method="post" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            <div class="box-body">

                                                <div class="form-group">
                                                    <label>Photo</label>
                                                    <img style="height: 100px;"
                                                        src="{{ @$brand->image->name ? '/img/brand/'.$brand->image->name : url('/dist/img/brand2-160x160.jpg')}}">
                                                    <input name="img" class="form-control" type="file">
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
                                                aria-label="photo: activate to sort column descending">photo</th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($brands->count() > 0)
                                        @foreach ($brands as $brand)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                 <img style="height: 100px;"
                                                        src="{{ @$brand->image->name ? '/img/brand/'.$brand->image->name : url('/dist/img/brand2-160x160.jpg')}}">
                                            </td>

                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$brand->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('/siteAdmin/brand/delete/'. $brand->id)}}"
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
