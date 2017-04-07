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
    {{--<style>--}}
        {{--.log-button {--}}
            {{--background-color: #EC2028 !important;--}}
            {{--border-color: #E82027;--}}
            {{--color: #fff;--}}
        {{--}--}}
        {{--.log-button:hover, .log-button:active, .log-button.hover {--}}
            {{--background-color: #E82027;--}}
            {{--color: #fff;--}}
        {{--}--}}
    {{--</style>--}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6 col-md-offset-3" style="margin-top: 80px;">
                <div class="panel panel-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Login Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ url('/admin/login') }}">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
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

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn log-button btn-block btn-primary login">Sign in</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
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
