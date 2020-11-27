@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        requests messages
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">

                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-hover dataTable no-footer"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Name</th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="number: activate to sort column ascending">
                                                    number
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Place: activate to sort column ascending">
                                                    Place
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Page: activate to sort column ascending">
                                                    Page
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Date
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Details: activate to sort column ascending">
                                                    Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($requests->count() > 0)
                                            @foreach ($requests as $request)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$request->name}}</td>
                                                <td>{{$request->number}}</td>
                                                <td>
                                                    <a class="btn-block" href="{{ url('/pages/place/'.$request->place->id)}}">{{@$request->place->title}}</a>

                                                </td>
                                                <td>{{@$request->place->page->name}}</td>
                                                <td>{{$request->created_at->toDateString()}}</td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#modal-default{{$request->id}}"
                                                        class="btn btn-success" title="show" style="margin-bottom: 3px">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>

                                                    <a href="{{url('/siteAdmin/requests/delete/'. $request->id)}}"
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
                @if ($requests->count() > 0)
                @foreach ($requests as $request)
                <div class="modal fade" id="modal-default{{$request->id}}" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Edit request </h4>
                            </div>


                            <div class="modal-body">
                                <ul class="list-group">
                                    <li class="list-group-item ">
                                        <strong>
                                            name :
                                        </strong>
                                        {{$request->name}}
                                    </li>

                                    <li class="list-group-item ">
                                        <strong>
                                            number :
                                        </strong>
                                        {{$request->number}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Address :
                                        </strong>
                                        {{$request->Address}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Color :
                                        </strong>
                                        {{$request->Color}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Size :
                                        </strong>
                                        {{$request->Size}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            place title :
                                        </strong>
                                        <a class="btn-block" href="{{ url('/pages/place/'.$request->place->id)}}" target="_blank">{{@$request->place->title}}</a>
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            page name :
                                        </strong>
                                        {{@$request->place->page->name}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            created at :
                                        </strong>
                                        {{$request->created_at->toDateString()}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Photos :
                                        </strong>
                                        @isset($request->place->images )
                                            @if ($request->place->images != null )
                                               @foreach ($request->place->images as $image)
                                                    <img style="height: 100px" src="{{ @$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg') }}" alt="{{@$request->place->name}}" class="card-img-top"  />
                                               @endforeach
                                            @endif
                                        @endisset
                                        
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
