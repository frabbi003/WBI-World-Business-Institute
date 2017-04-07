<!DOCTYPE html>
<html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Research</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/lib/bootstrap/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.min.css') }}"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ asset('/lib/browser-support/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/lib/browser-support/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>

<div class="wrapper">
    <div class="header-inner-pages">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <nav class="navbar menu-top">
                            <ul class="menu">
                                <li class="home">Ph: {{ $footer->phone }}</li>
                                <li>Email: {{ $footer->fax_number }}</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="navbar-right topnav-sidebar">
                            <ul class="textwidget">
                                @foreach($getAllSocialIcon as $icon)
                                    <li>
                                        <a href="{{ $icon->social_link }}" target="_blank"><i
                                                    class="{{ $icon->social_icon_class }}"></i></a>
                                    </li>
                                @endforeach
                                <li>
                                    <div class="submenu top-search">
                                        <form class="search-form">
                                            <div class="input-group">
                                                <input type="search" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
															<button class="btn btn-default" type="button"><i
                                                                        class="fa fa-search"></i></button>
														</span>
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="header">
        <div class="header-wrap">
            <div class="header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="logo" class="logo">
                                <a href="{{ url('/') }}" rel="home">
                                    <img src="{{ asset("img/".$getLogo) }}" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="home">
                                            <a href="{{ url('/') }}">HOME</a>
                                        </li>
                                        @foreach($menuList as $menu)
                                            <li>
                                                <a href="{{ url($menu->menu_link).'/'.$menu->id }}">{{ $menu->menu_name }} </a>
                                                @if (count($menu['submenu']))
                                                    <ul class="submenu">
                                                        @foreach($menu['submenu'] as $subMenu)
                                                            <li>
                                                                <a href="{{ url($subMenu->sub_menu_link).'/sub'.'/'.$subMenu->id }}">{{ $subMenu->sub_menu_name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <div class="container">
            <section class="register-section edit-profile-main">
                <div class="container">
                    <h1 class="register-heading">Register Here</h1>
                    <p class="register-slogan">Please fill up the form details. Press the submit button to save the information.</p>
                        <form class="registration-form edit-profile-form" action="{{ url('/signup') }}" method="POST" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="rf-heading">Your Personal Details</p>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Name<span style="color: red;"> *</span></label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="Name" >
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Email<span style="color: red;"> *</span></label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Password<span style="color: red;"> *</span></label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Phone</label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">User Profile Picture<span style="color: red;"> *</span></label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="file" name="image" id="exampleInputFile" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p class="rf-heading">Others Information</p>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">University<span style="color: red;"> *</span></label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="uni_name" class="form-control" placeholder="University Name" >

                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Country<span style="color: red;"> *</span></label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="country" class="form-control" placeholder="Country" >

                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">City</label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="city" class="form-control" placeholder="City" >
                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Zip Code</label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="zip_code" class="form-control" placeholder="Zip Code" >
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-3">
                                        <label for="">Gender</label>
                                    </div>

                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="inlineRadio1" value="Male" checked> Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
                                        </label>
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
            </div>
    </div>
<div class="container">
    <div class="row">
        <footer class="site-footer-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-menu">
                        <p>
                            {{ $footer->title }}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p>
                            {{ $footer->copy_right }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

</div>
