@extends('layouts.adminPanel')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">New User</h3>
                    <a class="btn btn-primary pull-right" href="{{URL::route('user.index')}}">
                        All List
                    </a>
                </div>
                <form role="form" action="{{ URL::route('user.store') }}" method="POST" enctype = "multipart/form-data">

                    <div class="box-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="control-label" for="name">Full Name
                                <span class="required">*</span>
                            </label>
                            <input id="name" type="text" class="form-control"  name="name" value=""  required="required">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email">Email
                                <span class="required">*</span>
                            </label>
                            <input id="email" type="email" class="form-control"  name="email" value="" required="required">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">Password<span class="required">*</span>
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


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection
