
@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1 style="font-family: 'ThaiSans Neue';color:#3dc9b3;">{{$artist->name}}</h1>
        <br>
            <div  style="text-align: center">
                    <img src="{{URL::to('/image/'.$artist->image)}}" class="img-circle" width="185px" height="185px" style="border: 10px solid transparent;margin-bottom: 25px;width: 50%;height: 50%;opacity: 0.7;">

                   <h3 style="font-family: 'ThaiSans Neue';">ประวัติ</h3>
                <div class="container">
                    <div style="border-style: solid;border-width: 3px;padding: 20px;">
                        <p style="font-family: 'ThaiSans Neue';font-size: 21px;">{{$artist->profile}}</p>
                    </div>
                </div>
                <br>

                <a href="{{ $artist->facebook }}" target="_blank">
                        <i class="fa fa-facebook-official" style="font-size: 36px"></i>
                    </a>


                    <a href="{{ $artist->youtube }}" target="_blank">
                        <i class="fa fa-youtube" style="font-size: 36px;"></i>
                    </a>

                {{--<h4>Youtube</h4>  <p>{{ $artist->youtube }}</p>--}}
            </div>
    </div>

@endsection





