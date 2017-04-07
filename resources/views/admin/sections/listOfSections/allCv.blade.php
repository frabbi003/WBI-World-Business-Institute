@extends('layouts.adminPanel')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">USER'S CV LIST</h3>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th style="font-size: 16px;">User's Name</th>
                                        <th style="font-size: 16px;">Email Address</th>
                                        <th style="font-size: 16px;">Download CV</th>
                                    </tr>
                                    @foreach($allCv as $cv)
                                        <tr>
                                            <td>
                                                <p>{{ $cv->name }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $cv->email }}</p>
                                            </td>
                                                <td>
                                                    @foreach($cv['clientCV'] as $clientcv)
                                                    <a href="cv/{{$clientcv->client_cv}}" download="{{$clientcv->client_cv}}">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="fa fa-cloud-download" aria-hidden="true"> Download</i>
                                                        </button>
                                                    </a>
                                                    @endforeach
                                                </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                                {{--{{ dd($allCv) }}--}}
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