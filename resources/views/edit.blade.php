{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Update</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<form action="update/{{$artist->id}}" method="post" enctype="multipart/form-data">--}}
    {{--<label for="name">Name</label>--}}
    {{--<input type="text" name="name" id="name" value="{{$artist->name}}">--}}
    {{--<br>--}}
    {{--{{method_field('patch')}}--}}

    {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
    {{--<label for="profile">Profile</label>--}}
    {{--<textarea name="profile" rows="10" cols="30" value="{{$artist->profile}}"></textarea>--}}
    {{--<input type="text" name="profile" id="" value="{{$artist->profile}}">--}}
    {{--<br>--}}

    {{--<label for="">facebook</label>--}}
    {{--<input type="text" name="facebook" value="" id="profile" >--}}
    {{--<br>--}}

    {{--<label for="">youtube</label>--}}
    {{--<input type="text" name="youtube" value="" id="profile">--}}
    {{--<br>--}}

    {{--<label for="">แนวเพลง</label>--}}
    {{--<br>--}}
    {{--<input type="checkbox" name="style[]" value="pop">Pop&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Rock">Rock&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="R&B">R&B--}}
    {{--<br>--}}
    {{--<input type="checkbox" name="style[]" value="Electronic/Techno">Electronic/Techno&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Electronic/Dance">Electronic/Dance&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Disco">Disco--}}
    {{--<br>--}}
    {{--<input type="checkbox" name="style[]" value="Rap">Rap&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Hip-Hop">Hip-Hop&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Country">Country--}}
    {{--<br>--}}


    {{--<input type="file" name="image">--}}
    {{--<img src="{{URL::to('/image/'.$artist->image)}}" alt="" width="100px" height="100px">--}}

    {{--<br>--}}
    {{--<br>--}}
    {{--<label for=""></label>--}}
    {{--<input type="submit" name="submit" value="submit" id="submit">--}}

{{--</form>--}}
{{--</body>--}}
{{--</html>--}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="well" style="color: #3dc9b3">Edit Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="update/{{$artist->id}}" method="post" enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>ชื่อวง</label>
                                <input type="text" name="name" placeholder="" class="form-control" value="{{$artist->name}}">
                            </div>

                        </div>
                        {{method_field('patch')}}
                        <div class="form-group">
                            <label>ประวัติ</label>
                            <textarea name="profile" placeholder="" rows="5" class="form-control" >{{$artist->profile}}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Facebook</label>
                                <input type="text" name="facebook" placeholder="" class="form-control" value="{{$artist->facebook}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Youtube</label>
                                <input type="text" name="youtube" placeholder="" class="form-control" value="{{$artist->youtube}}">
                            </div>

                        </div>


                        <div class="form-group">
                            <label >แนวเพลง</label>

                            <select id="selectbasic" name="style" class="form-control input-md">
                                <option>Pop</option>
                                <option>Rock</option>
                                <option>R&B</option>
                                <option>Electronic/Techno</option>
                                <option>Electronic/Dance</option>
                                <option>Jazz</option>
                                <option>Disco</option>
                                <option>Alternative rock</option>
                                <option>Rap</option>
                                <option>Hip-Hop</option>
                                <option>Country</option>
                                <option>Indy</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image">
                            <br>
                            <img src="{{URL::to('/image/'.$artist->image)}}" alt="" width="100px" height="100px">
                            {{--<input  type="file" name="image">--}}
                            {{--<br>--}}
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-lg btn-info">Submit</button>
                        </div>

                </form>
            </div>
        </div>
    </div>

@endsection