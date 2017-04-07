@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    PAGER PARTS
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Pager Part's Create</h3>
                                <a href="/pager-parts-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/pager-parts-create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Section Name</label>
                                            {!!Form::select('rchsection_id', $sections, null,['class'=>'form-control','id' =>'type'])!!}
                                            {{--{!!Form::select('rchsection_id', $sections, null,['class'=>'form-control','id' =>'type', 'required'=>'required'])!!}--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="" name="title" placeholder="Enter menu name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Link</label>
                                            <input type="text" class="form-control" id="" name="link" placeholder="Enter menu link">
                                        </div>
                                        <div class="form-group">
                                            <label>Page Headline</label>
                                            <input type="text" class="form-control" id="" name="headline" placeholder="Enter Page Headline">
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" min="1" id="" name="position" placeholder="Enter menu position" required>
                                        </div>
                                        <div class="form-group" id="pageImg">
                                            <label for="exampleInputFile">Upload Cover Photo</label>
                                            <input type="file" name="img" id="exampleInputFile">
                                        </div>
                                        <div class="box-body pad" id="pageHtml"><label>Description</label>
                                            <textarea id="editor1" name="description" rows="10" cols="80">
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