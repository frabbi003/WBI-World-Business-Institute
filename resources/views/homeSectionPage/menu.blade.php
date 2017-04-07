@extends('layouts.master')
@section('slider')
    <div class="row">
        <div class="col-md-12">
            @foreach($getMenu as $menu)
                <div class="main-breadcrumb collaboration-breadcrumb"
                     style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$menu->menu_img) }}) no-repeat scroll center center;">
                    {{--<ol class="breadcrumb">--}}
                        {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                        {{--<li>{{ $menu->menu_name }}</li>--}}
                    {{--</ol>--}}
                </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="body-left-part">
            <div class="collaboration-content">
                <h3>{{ $menu->menu_headline }}</h3> <br>
                {!! $menu->menu_desc !!}
            </div>
        </div>
        @endforeach
    </div>
@endsection