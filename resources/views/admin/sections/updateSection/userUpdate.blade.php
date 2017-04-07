@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    WBI Associative Fellow's User
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Update Information</h3>
                                <a href="/user-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach($items as $item)
                                    <form role="form" action="{{ url('/user-update') }}" method="POST" enctype = "multipart/form-data">
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="{{ $item->name }}" id="" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="{{ $item->email }}" id="" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" id="" name="password" placeholder="******" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->phone }}" name="phone" required>
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset('img/'.$item->image) }}" style="height: 150px; width: 150px;">
                                            </div>
                                            <div class="form-group" id="pageImg">
                                                <label for="exampleInputFile">Update User Photo</label>
                                                <input type="file" name="image" id="exampleInputFile">
                                            </div>
                                            <div class="form-group">
                                                <label>WBI Fellow User Type</label>
                                                <select class="form-control select2" name="type" style="width: 100%;">
                                                    <option selected="selected" value=1>WBI Associative Fellow</option>
                                                    <option value=2>WBI Fellow</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>University</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->uni_name }}" name="uni_name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Occupation/ Job Title</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->occupation }}" name="occupation">
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->country }}" name="country">
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->city }}" name="city">
                                            </div>
                                            <div class="form-group">
                                                <label>Zip Code</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->zip_code }}" name="zip_code">
                                            </div>
                                            <div class="form-group">
                                                <label>Nationality</label>
                                                <input type="text" class="form-control" id="" value="{{ $item->nationality }}" name="nationality">
                                            </div>
                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        @endforeach
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./row -->
            </section>

        </div>

    </div>

@endsection