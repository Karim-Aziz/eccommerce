@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        orders messages
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
                                                    colspan="1" aria-label="phone: activate to sort column ascending">
                                                    phone
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="email: activate to sort column ascending">
                                                    email
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="amount: activate to sort column ascending">
                                                    amount
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
                                            @if ($Orders->count() > 0)
                                            @foreach ($Orders as $Order)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$Order->user->name}}</td>
                                                <td>{{$Order->user->phone}}</td>
                                                <td>
                                                    {{$Order->user->email}}
                                                </td>
                                                <td>
                                                    {{$Order->amount}}
                                                </td>
                                                <td>{{$Order->created_at->toDateString()}}</td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#modal-default{{$Order->id}}"
                                                        class="btn btn-success" title="show" style="margin-bottom: 3px">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>

                                                    <a href="{{url('/siteAdmin/orders/delete/'. $Order->id)}}"
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
                @if ($Orders->count() > 0)
                @foreach ($Orders as $Order)
                <div class="modal fade" id="modal-default{{$Order->id}}" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Show order </h4>
                            </div>


                            <div class="modal-body">
                                <ul class="list-group">
                                    <li class="list-group-item ">
                                        <strong>
                                            total price :
                                        </strong>
                                        {{$Order->amount}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            name :
                                        </strong>
                                        {{$Order->user->name}}
                                    </li>

                                    <li class="list-group-item ">
                                        <strong>
                                            phone :
                                        </strong>
                                        {{$Order->user->phone}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Enail :
                                        </strong>
                                        {{$Order->user->email}}
                                    </li>
                                    @foreach ($Order->product as $product)
                                    <li class="list-group-item ">
                                        <strong>
                                            product title :
                                        </strong>
                                        <a class="btn-block" href="{{ url('/pages/place/'.$product->place->id)}}" target="_blank">{{@$product->place->title}}</a>
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Category name :
                                        </strong>
                                        {{@$product->place->page->name}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            price  :
                                        </strong>
                                        {{@$product->price }}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            quantity :
                                        </strong>
                                        {{@$product->quantity }}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            created at :
                                        </strong>
                                        {{$Order->created_at->toDateString()}}
                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            Photos :
                                        </strong>
                                        @isset($product->place->images )
                                            @if ($product->place->images != null )
                                               @foreach ($product->place->images as $image)
                                                    <img style="height: 100px" src="{{ @$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg') }}" alt="{{@$product->place->name}}" class="card-img-top"  />
                                               @endforeach
                                            @endif
                                        @endisset

                                    </li>
                                     @endforeach

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
