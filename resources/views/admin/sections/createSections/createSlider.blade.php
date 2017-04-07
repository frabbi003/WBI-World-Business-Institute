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
                                <h3 class="box-title">Create Single Slider</h3>
                                <a href="/slider_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/create-slider') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Slider Link</label>
                                            <input type="text" class="form-control" id="" name="slider_link" placeholder="Enter slider link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Slider Title</label>
                                            <input type="text" class="form-control" id="" name="slider_title" placeholder="Enter slider title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" id="" name="slider_position" min="1" placeholder="Enter slider position" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Slider Home Page Image</label>
                                            <input type="file" name="slider_img" id="exampleInputFile" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Slider Cover Image</label>
                                            <input type="file" name="slider_cover_img" id="exampleInputFile" required>
                                        </div>
                                        <div class="form-group" id="pageHtml"><label>Slider Description</label>
                                            <textarea id="editor1" name="slider_desc" rows="10" cols="80">
                                            </textarea>
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
@section('script')
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>
@endsection
