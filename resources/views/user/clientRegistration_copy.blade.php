<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Research</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('/')}}/lib/bootstrap/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css">
    <![endif]-->
    <style>
        body {
            background-color: #fff;
        }

        .my-form{
            margin-top: 100px !important;
        }

        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 0.3em;
        }

        *[role="form"] h2 {
            margin-left: 5em;
            margin-bottom: 1em;
        }
        #btnSearch,
        #btnClear{
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

                    <div class="container">
                        <form class="form-horizontal my-form" action="{{ url('/signup') }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <h2>Registration Form</h2>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="firstName" name="name" placeholder="Full Name" class="form-control" autofocus>
                                    <span class="help-block">First Name, Last Name eg.: Haydar, Hussain</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input type="date" name="dob" id="birthDate" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Gender</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="uncknownRadio" value="Unknown">Unknown
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                <label for="country" class="col-sm-3 control-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" name="country" id="country" placeholder="Country Name" class="form-control">
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                <label for="city" class="col-sm-3 control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" id="" placeholder="City" class="form-control">
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                <label for="zipCode" class="col-sm-3 control-label">Zip Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="zip_code" id="" placeholder="Zip Code" class="form-control">
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label">University Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="uni_name" id="" placeholder="University Name" class="form-control">
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" id="" placeholder="Phone Number" class="form-control">
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                <label for="position" class="col-sm-3 control-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="number" name="position" min="1" id="" placeholder="Position" class="form-control">
                                </div>
                            </div> <!-- /.form-group -->
                            <div class="form-group">
                                {{--<div class="col-sm-4 col-sm-offset-3">--}}
                                    {{--<button type="" class="btn btn-primary btn-block">Back</button>--}}
                                {{--</div>--}}
                                {{--<span>--}}
                                    {{--<div class="col-sm-5 col-sm-offset-3">--}}
                                    {{--<button type="submit" class="btn btn-primary btn-block">Register</button>--}}
                                {{--</div>--}}
                                {{--</span>--}}
                                {{--<div class="row">--}}
                                    <div class="col-sm-12 text-center">
                                        <a href="{{ url('/') }}"><button id="btnClear" class="btn btn-danger btn-md center-block" Style="width: 100px;" OnClick="btnClear_Click" >Back</button></a>
                                        <button id="btnSearch" class="btn btn-primary btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click" >Register</button>
                                    </div>
                                {{--</div>--}}
                            </div>
                        </form> <!-- /form -->
                    </div> <!-- ./container -->
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>