@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">USER'S CV LIST</h3>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th style="font-size: 16px;">User's Name</th>
                                        <th style="font-size: 16px;">Email Address</th>
                                        <th style="font-size: 16px;">Created At</th>
                                        <th style="font-size: 16px;">Action</th>
                                    </tr>
                                    @foreach($allUserList as $user)
                                        <tr>
                                            <td>
                                                <p>{{ $user->name }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $user->email }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $user->created_at->format('F j, Y h:m A') }}</p>
                                            </td>
                                            <td>
                                                <a href="{{url('/user-update',$user->id)}}"><i class="fa fa-pencil-square-o btnEdit" aria-hidden="true" style="color:#179BD7;font-size: 20px; margin-right: 5px;" ></i></a>
                                                <a href="{{URL::Route('user.delete',$user->id)}}"><i class="fa fa-trash-o btnDelete" style="color:red;font-size: 22px;" aria-hidden="true" onclick="return confirm('Are you sure to delete this User?');"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                                {{--{{ dd($allCv) }}--}}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
            </section>
        </div>

    </div>
@endsection