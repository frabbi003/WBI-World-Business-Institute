@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">FOOTER LIST </h3>
                                <a href="{{ url('/footer-create') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <th>Copy Right</th>
                                        <th>Phone</th>
                                        <th>FAX</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($footerList as $list)
                                        <tr>
                                            <td>
                                                <a href="">{{ $list->title }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->copy_right }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->phone }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->fax_number }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/footer-update',$list->id)}}"><i class="fa fa-pencil-square-o btnEdit" aria-hidden="true" style="color:#179BD7;font-size: 20px; margin-right: 5px;" ></i></a>
                                                <span><a href="{{URL::Route('footer.delete',$list->id)}}"><i class="fa fa-trash-o btnDelete" style="color:red;font-size: 22px;" aria-hidden="true" onclick="return confirm('Are you sure to delete this data');"></i></a></span>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
            </section>
        </div>

    </div>

@endsection