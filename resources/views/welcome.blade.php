@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Welcome to SHOWKHONG</div>--}}

                {{--<div class="panel-body">--}}
                    {{--โปรด ล็อคอิน ก่อนเข้าระบบ--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                Please Login !
            </div>
        </div>
    </div>
</div>

@endsection
