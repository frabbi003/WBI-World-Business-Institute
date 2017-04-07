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
            <a href="/logout" class="pull-right"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>

            <h1 class="register-heading">Upload Your CV Here</h1>
            <p class="register-slogan">Please attach your CV & Press the submit button to Upload.</p>
            <form class="registration-form edit-profile-form" action="{{ url('/upload-cv') }}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-9">
                        <br><br><br>

                        <div class="row rf-group">
                            <div class="col-md-3">
                                <label for="">Name</label>
                            </div>

                            <div class="col-md-9">
                                {!!Form::select('research_clients_id', $registerUser, null,['class'=>'form-control','id' =>'type', 'required'=>'required'])!!}

                            </div>
                        </div>

                        <div class="row rf-group">
                            <div class="col-md-3">
                                <label for="">Upload CV</label>
                            </div>

                            <div class="col-md-9">
                                <input type="file" name="client_cv" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="submit-btn-wrap text-center">
                    <input type="submit" class="btn btn-danger login-btn register" value="Submit">
                </div>

            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>