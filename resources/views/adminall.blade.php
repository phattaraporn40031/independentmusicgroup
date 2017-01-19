@extends('layouts.app')

@section('content')
        {{--<!doctype html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta http-equiv="Content-Language" content="th">--}}
    {{--<meta http-equiv="content-Type" content="text/html; charset=window-874">--}}
    {{--<meta http-equiv="content-Type" content="text/html; charset=tis-620">--}}
    {{--<title>View All</title>--}}
    {{--<style>--}}
        {{--table,th,tr,td{--}}
            {{--border: 1px solid black;--}}
            {{--border-collapse: collapse;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}
                {{--<div class="panel-body">--}}

                  {{--@include('search',['url'=>'home/adminall/search','link'=>'home/adminall/search'])--}}

                    {{--<table>--}}
                        {{--<tr>--}}
                            {{--<th>Name</th>--}}


                        {{--</tr>--}}
                        {{--<tbody>--}}
                        {{--@foreach($users as $user)--}}
                            {{--<tr>--}}

                                {{--<td>{{$user->name}}</td>--}}

                            {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                    {{--<a href="/home">BACK</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


            <div class="container text-center">
                <h3 style="color: #3dc9b3">THE ADMIN</h3>
                <p><em>We love music!</em></p>
                </div><br>

                <table class="table" style="text-align: center">
                    <tr>
                        <td>
                            @foreach($users as $user)

                                <img src="/image/admin.jpg" alt="" width="185" height="185">
                                <h4 style="color: grey"><strong>{{$user->name}}</strong></h4>
                                <p style="color: lightgrey">{{$user->created_at}}</p><br>

                            @endforeach
                        </td>
                    </tr>
                </table>

    @endsection