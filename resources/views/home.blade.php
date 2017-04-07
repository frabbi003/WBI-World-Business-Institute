@extends('layouts.master')
@section('slider')
    <div class="row">
        <div class="col-md-12">
            <div class="main-slider">
                <div class="tab-pro-slider new-product owl-carousel">
                    @foreach($allSliders as $slider)
                        <div class="single-product-item">
                            <div class="product-img text-center">
                                <!-- Product image -->
                                <a href="{{ url('slider/'.$slider->slider_link).'/'.$slider->slider_id }}" class="pro-image">
                                    <img src="{{ asset("img/".$slider->slider_img) }}" alt="image"/>
                                    <span>{{ $slider->slider_title }}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="body-left-part">

            <div class="product-processing">
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            @foreach($homeAboutUs as $aboutUs)
                                <h3>{{ $aboutUs->title }}</h3>
                                <ul>
                                    <li>
                                        <h4>{{ $aboutUs->headline }}</h4>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    @foreach($features as $feature)
                        <div class="col-md-12">
                            <div class="thumbnail">
                                <h3>{{ $feature->title }}</h3>
                                <ul>
                                    <li>
                                        {{--<a href="{{ url('features/'.$feature->link).'/'.$feature->id }}">--}}
                                        {{--<a href="{{ $feature->link }}/{{ $feature->id }}">--}}
                                        <h4>
                                            {{ $feature->headline }}
                                        </h4>
                                        {{--<b>More</b>--}}
                                        {{--</a>--}}
                                    </li>
                                    <!-- <li><a href="#">See All Conference</a></li> -->
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection