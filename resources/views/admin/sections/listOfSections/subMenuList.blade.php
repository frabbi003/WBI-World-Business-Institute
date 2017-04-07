@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">SUB MENU LIST</h3>
                                <a href="{{ url('/sub-menu-create') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th style="font-size: 16px;">Sub Menu Name</th>
                                        <th style="font-size: 16px;">Action</th>
                                        <th style="width: 40px;font-size: 16px;">Label</th>
                                    </tr>
                                    @foreach($subMenuList as $subMenu)
                                        <tr>
                                            <td>
                                                <a href="">{{ $subMenu->sub_menu_name }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/sub-menu-update',$subMenu->id)}}"><i class="fa fa-pencil-square-o btnEdit" aria-hidden="true" style="color:#179BD7;font-size: 20px; margin-right: 5px;" ></i></a>
                                                <span><a href="{{URL::Route('sub-menu.delete',$subMenu->id)}}"><i class="fa fa-trash-o btnDelete" style="color:red;font-size: 22px;" aria-hidden="true" onclick="return confirm('Are you sure to delete this data');"></i></a></span>
                                            </td>
                                            @if(($subMenu->sub_menu_status)== 1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($subMenu->sub_menu_status)== 2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
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
