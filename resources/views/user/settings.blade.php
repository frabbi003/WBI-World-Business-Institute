@extends('layouts.adminPanel')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>
            @endif
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">User Settings</h3>
                    <a class="btn btn-primary pull-right" href="{{URL::route('user.index')}}">
                        All List
                    </a>
                </div>
                <form class="form-label-left" novalidate method="post" action="{{URL::route('user.settings')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="for" value="info">

                    <div class="form-group">
                        <label class="control-label" for="name">Full Name <span class="required">*</span>
                        </label>
                        <input id="name" type="text" class="form-control"  name="name" value="{{$user->name}}" required="required">

                        <span class="text-danger">{{ $errors->first('name') }}</span>

                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email
                        </label>
                        <input type="text" id="email" name="email" placeholder="mrrepto@repto.co" value="{{$user->email}}" class="form-control">

                        <span class="text-danger">{{ $errors->first('email') }}</span>

                    </div>

                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-refresh"> Update Info</i></button>

                </form>
                <br>
                <hr>

                <form class="form-label-left" novalidate method="post" action="{{URL::route('user.settings')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="for" value="password">

                    <div class="form-group">
                        <label class="control-label" for="password">New Password<span class="required">*</span>
                        </label>
                        <input id="name" class="form-control"  name="password" value="" type="password">

                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="confirmpassword">Confirm Password<span class="required">*</span>
                        </label>
                        <input type="password" class="form-control"  name="password_confirmation" value="" required="required">

                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    </div>


                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-refresh"> Update Password</i></button>

                </form>
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection
