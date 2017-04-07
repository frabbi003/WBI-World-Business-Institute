@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">SLIDER LIST</h3>
                                <a href="{{ url('/create-slider') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th style="font-size: 16px;">Slider Title</th>
                                        <th style="font-size: 16px;">Action</th>
                                        <th style="width: 40px;font-size: 16px;">Label</th>
                                    </tr>
                                    @foreach($sliderList as $slider)
                                        <tr>
                                            <td>
                                                <a href="">{{ $slider->slider_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/slider-update',$slider->slider_id)}}"><i class="fa fa-pencil-square-o btnEdit" aria-hidden="true" style="color:#179BD7;font-size: 20px; margin-right: 5px;" ></i></a>
                                                <span><a href="{{URL::Route('slider.delete',$slider->slider_id)}}"><i class="fa fa-trash-o btnDelete" style="color:red;font-size: 22px;" aria-hidden="true" onclick="return confirm('Are you sure to delete this data');"></i></a></span>
                                            </td>
                                            @if(($slider->slider_status)== 1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($slider->slider_status)== 2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
            </section>
        </div>

    </div>

@endsection
