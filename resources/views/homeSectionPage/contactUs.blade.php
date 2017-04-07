@extends('layouts.master')
@section('slider')
    <div class="row">
        <div class="col-md-12">
            @foreach($getMenuData as $getContact)
                <div class="main-breadcrumb collaboration-breadcrumb"
                     style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$getContact->sub_menu_img) }}) no-repeat scroll center center;">
                    {{--<ol class="breadcrumb">--}}
                    {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                    {{--<li>{{ $getContact->menu_name }}</li>--}}
                    {{--</ol>--}}
                    {{--</div>--}}
                </div>
        </div>
        @endsection
        @section('content')
            <div class="col-md-9">
                <div class="body-left-part">
                    <div class="collaboration-content">
                        <h3>{{ $getContact->sub_menu_name }}</h3> <br>
                        <p>
                            {!! $getContact->sub_menu_desc !!}
                        </p>
                        <b>You may fill the contact form below and click 'Send'.</b> <br><br>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="exampleInputName2" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea id="inputText3" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                        <br>

                    </div>
                </div>
            </div>
    @endforeach
@endsection