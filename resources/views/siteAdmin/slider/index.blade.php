@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Home Slider
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
                    @if ($sliders->count() > 0)
                        @foreach ($sliders as $home_slider)
                            <div class="modal fade" id="modal-default{{$home_slider->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit Home Slider </h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/slider/edit/'.$home_slider->id)}}"
                                            method="post"
                                                enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Images</label>
                                                    @foreach (@$home_slider->images as $image)
                                                    <img style="height: 64px;width: 64px;border: 1px solid #ccc; padding: 2px"
                                                        src="{{'/img/slider_images/'.@$image->name}}"
                                                        data-toggle="modal"
                                                        data-target="#modal-default{{$home_slider->id}}">
                                                    @endforeach
                                                    <div class="form-group">
                                                        <label>Images</label>
                                                        <input name="images[]" class="form-control" type="file"
                                                            multiple="multiple">
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
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Images: activate to sort column ascending">Images
                                                </th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sliders->count() > 0)
                                        @foreach ($sliders as $home_slider)
                                        <tr role="row" class="odd">
                                            <td >
                                                @foreach (@$home_slider->images as $image)
                                                    <img style="height: 64px;width: 64px;border: 1px solid #ccc; padding: 2px"
                                                    src="{{'/img/slider_images/'.@$image->name}}"
                                                    data-toggle="modal"
                                                        data-target="#modal-default{{$home_slider->id}}">
                                                @endforeach

                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$home_slider->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                {{--
                                                <a href="{{url('/siteAdmin/home_slider/delete/'. $home_slider->id)}}"
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
