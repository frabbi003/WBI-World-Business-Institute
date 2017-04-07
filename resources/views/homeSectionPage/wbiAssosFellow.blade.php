@extends('layouts.master')
@section('slider')
    <div class="row">
        <div class="col-md-12">
            @foreach($getWbiFellowData as $getContact)
                <div class="main-breadcrumb collaboration-breadcrumb"
                     style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$getContact->sub_menu_img) }}) no-repeat scroll center center;">
                </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="body-left-part">
            <div class="collaboration-content">
                <h3>{{ $getContact->sub_menu_headline }}</h3> <br>
                {!! $getContact->sub_menu_desc !!}
                </br>
                <div class="people-table table-content table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th class="people-name">Name</th>
                            <th class="people-intro">University</th>
                            <th class="people-country">Country</th>
                            <th class="people-more">Profile</th>
                        </tr>
                        </thead>
                        <tbody>
                        </br>
                        @foreach($homePeople as $people)
                            <tr>
                                <td class="people-name">{{ $people->name }}</td>
                                <td class="people-intro">{{ $people->uni_name }}</td>
                                <td class="people-country">{{ $people->country }}</td>
                                <td class="people-more"><a href="{{ url('people/'.$people->link).'/'.$people->id }}" target="_blank"><b>Profile</b></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection