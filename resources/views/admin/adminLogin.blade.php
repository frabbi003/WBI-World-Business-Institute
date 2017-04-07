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
        /* Start Complain page CSS*/
        .registration-form p {
            font-size: 25px;
            font-weight: 600;
        }
        .complain-main, .register-section, .user-section, .order-section {
            margin: 80px 0;
        }
        .register-heading, .register-slogan {
            text-align: center;
        }
        .registration-form .rf-heading {
            border-bottom: 1px solid #e5e5e5;
            margin: 30px 0;
            padding-bottom: 20px;
            text-align: center;
        }
        .register-slogan {
            margin-top: 30px;
        }
        .registration-form .rf-group {
            margin-bottom: 20px;
        }
        .registration-form input, .registration-form textarea {
            border-radius: 0;
        }
        /*Edit Profile CSS*/
        .registration-form.edit-profile-form label {
            font-size: 13px;
            font-weight: 600;
        }
        .register-heading, .register-slogan {
            text-align: center;
        }
        h1 {
            font-size: 35px;
            /* color: #e85243; */
            font-weight: 700;
            text-transform: uppercase;
        }
        .btn-danger.active, .btn-danger:active, .btn-danger:hover, .open>.dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925;
        }
        .login-btn {
            font-size: 25px;
            font-weight: 500;
            line-height: 30px;
            width: 200px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

<div class="container">
    <section class="register-section edit-profile-main">
        <div class="container">
            <h1 class="register-heading">Admin Login</h1>
            <p class="register-slogan">Please fill up the User Email & Password. Press the submit button to do login.</p>
            <form class="registration-form edit-profile-form" action="{{ url('/admin/login') }}" method="POST" role="form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <p class="rf-heading">Admin Email Address</p>
                        <div class="row rf-group">
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                        </div>
                    <div class="col-sm-6">
                        <p class="rf-heading">Password</p>
                        <div class="row rf-group">
                            <div class="col-md-10">
                                <input type="password" name="password" class="form-control" placeholder="Enter Your Password" >
                            </div>
                        </div>
                    </div>
                </div>

                @if (Session::has('message'))
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="alert alert-warning">
                                <label class="text-danger">
                                    {{ Session::get('message')}}
                                </label>
                            </div>

                        </div>
                    </div>
                @endif

                <div class="submit-btn-wrap text-center" style="margin-top: 50px; margin-right: 134px;">
                    <input type="submit" class="btn btn-danger login-btn register" value="Login">
                </div>

            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>