@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    MENU SECTION
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Update Menu</h3>
                                <a href="/menu-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach($items as $item)
                                <form role="form" action="{{ url('/menu-update') }}" method="POST" enctype = "multipart/form-data">
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{ $item->menu_name }}" id="" name="menu_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" value="{{ $item->menu_link }}" id="" name="menu_link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Headline</label>
                                            <input type="text" class="form-control" value="{{ $item->menu_headline }}" id="" name="menu_headline" placeholder="Enter Page Headline">
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" id="" value="{{ $item->menu_pos }}" name="menu_pos" placeholder="Enter menu position" required>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('img/'.$item->menu_img) }}" style="height: 100px; width: 300px;">
                                        </div>
                                        <div class="form-group" id="pageImg">
                                            <label for="exampleInputFile">Upload Menu Cover Photo</label>
                                            <input type="file" name="menu_img" id="exampleInputFile">
                                        </div>
                                        <div class="box-body pad" id="pageHtml"><label>Page Details</label>
                                            <textarea id="editor1" name="menu_desc" rows="10" cols="80" required>
                                                {{ $item->menu_desc }}
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