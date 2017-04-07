@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Menu Section
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Sub Menu Create</h3>
                                <a href="/sub-menu-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/sub-menu-create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Parent Menu</label>
                                            {!!Form::select('sub_menu_parent_id', $menus, null,['class'=>'form-control','id' =>'type', 'required'=>'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="" name="sub_menu_name" placeholder="Enter menu name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" id="" name="sub_menu_link" placeholder="Enter menu link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Headline</label>
                                            <input type="text" class="form-control" id="" name="sub_menu_headline" placeholder="Enter Page Headline">
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" min="1" name="sub_menu_pos" placeholder="Enter menu position" required>
                                        </div>
                                        <div class="form-group" id="pageImg">
                                            <label for="exampleInputFile">Upload Menu Cover Photo</label>
                                            <input type="file" name="sub_menu_img" id="exampleInputFile" required>
                                        </div>
                                        <div class="box-body pad" id="pageHtml"><label>Page Details</label>
                                            <textarea id="editor1" name="sub_menu_desc" rows="10" cols="80" required>
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