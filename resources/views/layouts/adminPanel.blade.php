<!-- This master page for admin panel master page -->

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
    <!-- Ionicons -->
    <link href="{{ asset('') }}" rel="shortcut icon">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/')}}/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{url('/')}}/js/html5shiv.min.js"></script>
    <script src="{{url('/')}}/js/respond.min.js"></script>
    <![endif]-->
    <style>
        .required{
            color: red;
        }
        .skin-blue .main-header .navbar {
            background-color: #179BD7;
        }
        .skin-blue .main-header .logo {
            background-color: #179BD7;
            color: #fff;
            border-bottom: 0 solid transparent;
            border-right: 1px solid #eee;
        }
        .skin-blue .main-header .logo:hover{
            background-color: #179BD7;
        }
        .box.box-info {
            border-top-color: #179BD7;
        }
        menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a {
            color: #fff;
            background: #1e282c;
            border-left-color: #179BD7;
        }
        .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a{
            border-left-color: #179BD7;
        }
        .skin-blue .main-header .navbar .sidebar-toggle:hover {
            background-color: #179BD7;
        }
        .box.box-info {
            border-top-color: #D73925;
        }
        .box.box-success {
            border-top-color: #D73925;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>RE</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>RESEARCH</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">Research</span>
                            <span class="fa fa-cogs"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="/admin/logout"><i class="fa fa-power-off"> Logout</i></a>
                            </li>
                            <li>
                                <a href="{{URL::route('user.settings')}}"><i class="fa fa-cog"> Settings</i></a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active treeview">
                    <a href="/admin/dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="/create-logo">
                        <i class="fa fa-image"></i> <span>Logo Create</span>
                    </a>

                </li>
                {{--<li><a href="/sub-menu-list"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu Create</span></a></li>--}}
                <li><a href="/footer-list"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><span>Footer Part Create</span></a></li>
                <li><a href="/social-icon-list"><i class="fa fa-share-alt" aria-hidden="true"></i><span>Social Icon Create</span></a></li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                        <span>Menu</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/menu-list"><i class="fa fa-circle-o"></i>Menu Create</a></li>
                        <li><a href="/sub-menu-list"><i class="fa fa-circle-o"></i>Sub Menu Create</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span>Home Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/slider-list"><i class="fa fa-circle-o"></i>Slider Create</a></li>
                        <li><a href="/section-list"><i class="fa fa-circle-o"></i>Section Create</a></li>
                        <li><a href="/pager-parts-list"><i class="fa fa-circle-o"></i>Pager Parts Create</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/user-list"><i class="fa fa-circle-o"></i>All User</a></li>
                        <li><a href="/cv-list"><i class="fa fa-circle-o"></i>User's CV</a></li>
                        <li><a href="{{URL::route('user.index')}}"><i class="fa fa-circle-o"></i>All Admin User</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('contents')

        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <strong>Copyright &copy; 2016 <a href="http://stsbd.com">ST Solutions</a>.</strong> All rights
        reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{url('/')}}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/lib/jquery/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('/')}}/lib/bootstrap/bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="{{url('/')}}/plugins/ckeditor/ckeditor.js"></script>
<!-- daterangepicker -->
<script src="{{url('/')}}/js/moment.min.js"></script>
<script src="{{url('/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url('/')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('/')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('/')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/dist/js/app.min.js"></script>

@yield('script')
</body>
</html>
