@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    SLIDER SECTION
                </h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Update Slider</h3>
                                <a href="/slider-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach($items as $item)
                                <form role="form" action="{{ url('/slider-update') }}" method="POST" enctype = "multipart/form-data">
                                    <input type="hidden" value="{{ $item->slider_id }}" name="slider_id">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Slider Link</label>
                                            <input type="text" class="form-control" value="{{ $item->slider_link }}" id="" name="slider_link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Slider Title</label>
                                            <input type="text" class="form-control" value="{{ $item->slider_title }}" id="" name="slider_title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" value="{{ $item->slider_position }}" id="" name="slider_position" min="1" required>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('img/'.$item->slider_img) }}" style="height: 150px; width: 150px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Slider Home Page Image</label>
                                            <input type="file" name="slider_img" id="exampleInputFile">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('img/'.$item->slider_cover_img) }}" style="height: 100px; width: 300px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Slider Cover Image</label>
                                            <input type="file" name="slider_cover_img" id="exampleInputFile">
                                        </div>
                                        <div class="form-group" id="pageHtml"><label>Slider Description</label>
                                            <textarea id="editor1" name="slider_desc" rows="10" cols="80">
                                                {{ $item->slider_desc }}"
                                            </textarea>
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
