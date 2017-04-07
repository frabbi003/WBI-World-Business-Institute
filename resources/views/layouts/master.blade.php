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
                                <li>
                                    <a href="#" class="" data-toggle="modal" data-target="#login-modal"><b>Login</b></a>
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
                    {{--{{ dd($menuList) }}--}}
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="body-content">
            <div class="site-main-container">
                @yield('slider')
                <div class="row">
                    <div class="col-md-3">
                        <aside class="body-right-part">
                            <div class="single-widget">
                                <div class="news-widget">
                                    <h3>Events</h3>
                                    <ul class="inline-menu">
                                        @foreach($homeEvents as $event)
                                            <li>
                                                <a href="{{ url('features/'.$event->link).'/'.$event->id }}">{{ customDateFormat($event->created_at) }}
                                                    . {{ $event->headline }}</a></li>
                                        @endforeach
                                        {{--<li><a class="read-more" href="#">Overview of all events and seminars</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                            {{--<div class="single-widget">--}}
                                {{--<div class="news-widget">--}}
                                    {{--<h3>People</h3>--}}
                                    {{--<ul class="inline-menu">--}}
                                        {{--@foreach($homePeople as $people)--}}
                                            {{--<li>--}}
                                                {{--<a href="{{ url('people/'.$people->link).'/'.$people->id }}">{{ $people->name }}--}}
                                                    {{--, {{ $people->uni_name }},{{ $people->country }}</a></li>--}}
                                        {{--@endforeach--}}
                                        {{--<li><a class="read-more" href="#">Overview of all People</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </aside>
                    </div>
                    @yield('content')

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
                                        {{--A joint venture between <a href="#">Dhaka Univarsity</a> and <a href="#">Imperial College London</a>--}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-copyright">
                                    <p>
                                        {{ $footer->copy_right }}
                                        {{--Copyright © 2017 <a href="#">stsbd</a>--}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Upload Your CV</h1><br>
                    <form method="POST" action="{{ url('/signin') }}">
                        {{ csrf_field() }}
                        <input class="{{ $errors->has('email') ? 'has-error' : '' }}" type="email" name="email" placeholder="Email..." required>
                        <input class="{{ $errors->has('password') ? 'has-error' : '' }}" type="password" name="password" placeholder="Password" required>
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>

                    <div class="login-help">
                        <a href="{{ url('/signup') }}"><b>Register</b></a> - New To Here?
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery Latest version -->
        <script src="{{ asset("js/main.js") }}"></script>

        <!-- jquery library -->
        <script src="{{ asset("lib/jquery/jquery-2.1.4.min.js") }}"></script>
        <script src="{{ asset("lib/bootstrap/bootstrap.min.js") }}"></script>
        <script src="{{ asset("lib/jquery.waypoints.min.js") }}"></script>
        <!-- Owl Carousel JS -->
        <script type="text/javascript" src="{{ asset("js/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("lib/jquery.counterup.min.js") }}"></script>
        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
        <script type="text/javascript" src="{{ asset(" lib/browser-support/ie-opacity-polyfill.js") }}"></script>
        <![endif]-->

        <!-- jquery customize -->
        <script src="{{ asset("js/custom-jquery.js") }}"></script>
</body>
</html>