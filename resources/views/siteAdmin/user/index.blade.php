@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Users
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
                    @if ($users->count() > 0)
                        @foreach ($users as $user)
                            <div class="modal fade" id="modal-default{{$user->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit user</h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/user/edit/'.$user->id)}}" method="post" enctype="multipart/form-data">
                                            
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="name" type="text" class="form-control"
                                                        value="{{old('name')? old('name'): $user->name}}">
                                                        @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <input name="email" type="mail" class="form-control"
                                                        value="{{old('email')? old('email'): $user->email}}">
                                                        @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" type="password" class="form-control"
                                                        placeholder="New Password">
                                                        @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Photo</label>
                                                    <img style="height: 100px;border-radius: 50%"
                                                        src="{{ @$user->image->name ? '/img/users/'.$user->image->name : url('/dist/img/user2-160x160.jpg')}}">
                                                    <input name="img" class="form-control" type="file">
                                                </div>

                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="role" value="1"
                                                            {{$user->role == 1 ? 'checked':''}}> Admin
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="role"
                                                            {{$user->role == 0 ? 'checked':''}}
                                                                value="0">User
                                                        </label>
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" 
                                                aria-label="E-Mail: activate to sort column ascending">E-Mail</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" 
                                                aria-label="Phone: activate to sort column ascending">Role</th>
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
                                        @if ($users->count() > 0)
                                        @foreach ($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @if ($user->role == 1)
                                                    Admin
                                                @else 
                                                    User
                                                @endif
                                            </td>
                                            <td>{{$user->created_at->toDateString()}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$user->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('/siteAdmin/user/delete/'. $user->id)}}"
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
