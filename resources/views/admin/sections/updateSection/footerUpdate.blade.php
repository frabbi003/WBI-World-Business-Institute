@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    FOOTER
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Footer Update</h3>
                                <a href="/footer-list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach($items as $item)
                                <form role="form" action="{{ url('/footer-update') }}" method="POST" enctype = "multipart/form-data">
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" value="{{ $item->title }}" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" value="{{ $item->phone }}" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" class="form-control" value="{{ $item->fax_number }}" name="fax_number">
                                        </div>
                                        <div class="form-group">
                                            <label>Copy Right</label>
                                            <input type="text" class="form-control" min="1" value="{{ $item->copy_right }}" name="copy_right" required>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                @endforeach
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