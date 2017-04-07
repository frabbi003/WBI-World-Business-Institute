{{--@extends('layouts.master')--}}
{{--@section('slider')--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--{{ dd($getFeaturesItems) }}--}}
            {{--@foreach($getFeaturesItems as $featuresItem)--}}
                {{--<div class="main-breadcrumb collaboration-breadcrumb"--}}
                     {{--style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$featuresItem->img) }}) no-repeat scroll center center;">--}}
                    {{--<ol class="breadcrumb">--}}
                        {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                        {{--<li>{{ $featuresItem->title }}</li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
{{--@section('content')--}}
    {{--<div class="col-md-9">--}}
        {{--<div class="body-left-part">--}}
            {{--<div class="collaboration-content">--}}
                {{--<h3>{{ $featuresItem->title }}</h3> <br>--}}
                {{--{!! $featuresItem->description !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
{{--@endsection--}}