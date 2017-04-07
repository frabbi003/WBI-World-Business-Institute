@extends('layouts.master')
@section('slider')
    <div class="row">
        <div class="col-md-12">
            @foreach($getSliderData as $getSlider)
                <div class="main-breadcrumb collaboration-breadcrumb"
                     style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$getSlider->slider_cover_img) }}) no-repeat scroll center center;">
                    {{--<ol class="breadcrumb">--}}
                        {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                        {{--<li>{{ $getSlider->slider_title }}</li>--}}
                    {{--</ol>--}}
                </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="body-left-part">
            <div class="collaboration-content">
                <h3>{{ $getSlider->slider_title }}</h3> <br>
                {!! $getSlider->slider_desc !!}
            </div>
        </div>
        @endforeach
    </div>
@endsection