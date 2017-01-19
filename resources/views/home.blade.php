@extends('layouts.app')

@section('content')

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">


                    <div class="panel-body">
                        <table class="table" style="font-family: 'ThaiSans Neue'; font-size: 26px;">
                            <tr class="bg-warning">
                                <td><a href="home/viewall" style="color:lightcoral">รายชื่อสมาชิก</a></td>
                            </tr>
                            <tr>
                                <td><a href="home/adminall" style="color:lightgrey">รายชื่อผู้ดูแล</a></td>
                            </tr>
                            <tr class="bg-warning">
                                <td><a href="home/calendar" style="color:lightcoral">ตารางกิจกรรม</a>
                            </tr>
                            <tr>
                                <td><a href="index" style="color:lightgrey">เว็บไซต์</a></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
