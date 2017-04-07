@extends('layouts.adminPanel')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">All Admin Users</h3>
                    <a class="btn btn-primary pull-right" href="{{URL::route('user.create')}}">
                        Create
                    </a>
                </div>

                <div class="box-body table-responsive">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>

                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->format('F j, Y h:m A')}}</td>
                                <td>
                                    <form class="deleteForm" method="POST" action="{{URL::route('user.destroy',$user->id)}}">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class='btn btn-danger btn-xs btnDelete' href=''> <i class="fa fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

@endsection
