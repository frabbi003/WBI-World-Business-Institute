@extends('layouts.master')
@section('content')
    <div class="container">
        <section class="register-section edit-profile-main">
            <div class="col-md-9">
                <h1 class="register-heading">Personal Details</h1>
                @foreach($homePeopleDetails as $people)
                <img src="{{ asset('img/'.$people->image) }}" style="width: 150px"; height="150px"; alt="">
                <br><br><br>
                    <form class="registration-form edit-profile-form" action="{{ url('/signup') }}" method="POST" role="form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Name</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" value="{{ $people->name }}" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Email</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="email" name="email" value="{{ $people->email }}" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Phone</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="phone" value="{{ $people->phone }}" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">University / Institute</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="uni_name" value="{{ $people->uni_name }}" class="form-control" readonly >

                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Occupation / Job Title</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="" value="{{ $people->occupation }}" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Country</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="" value="{{ $people->country }}" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">City</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="" value="{{ $people->city }}" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Zip Code</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="" value="{{ $people->zip_code }}" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Gender</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="" value="{{ $people->gender }}" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row rf-group">
                                    <div class="col-md-4">
                                        <label for="">Nationality</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" name="" value="{{ $people->nationality }}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>

                        </div>
                @endforeach
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection