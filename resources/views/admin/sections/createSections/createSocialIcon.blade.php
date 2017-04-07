@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Slider Create
                </h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Create Social Icon</h3>
                                <a href="/social-icon-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/social-icon-create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="" name="social_name" placeholder="Enter slider link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" id="" name="social_link" placeholder="Enter slider title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" id="" name="social_icon_pos" min="1" placeholder="Enter slider position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Icon Class Name</label>
                                            <input type="text" class="form-control" id="" name="social_icon_class" placeholder="Enter slider title" required>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-->
                <!-- ./row -->
            </section>
        </div>

    </div>
@endsection
