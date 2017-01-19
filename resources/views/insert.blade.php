@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="well" style="color:#3dc9b3">Registration Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="store" method="post" enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>ชื่อวง</label>
                                <input type="text" name="name" placeholder="" class="form-control">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>ประวัติ</label>
                            <textarea name="profile" placeholder="" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Facebook</label>
                                <input type="text" name="facebook" placeholder="" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Youtube</label>
                                <input type="text" name="youtube" placeholder="" class="form-control">
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
                            <label class="control-label">Select Image</label>
                            <input  type="file"  name="name">
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

{{--<form action="store" method="post" enctype="multipart/form-data">--}}
    {{--<label for="">ชื่อวง</label>--}}
    {{--<input type="text" name="name" value="" id="name" autocomplete="off">--}}
    {{--<br>--}}
    {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

    {{--<label for="">ประวัติ</label>--}}
    {{--<textarea name="profile" rows="10" cols="30"></textarea>--}}
    {{--<input type="text" name="profile" value="" id="profile">--}}
    {{--<br>--}}

    {{--<label for="">facebook</label>--}}
    {{--<input type="text" name="facebook" value="" id="profile">--}}
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
    {{--<br>--}}
    {{--<input type="checkbox" name="style[]" value="Jazz">Jazz--}}
    {{--<input type="checkbox" name="style[]" value="Disco">Disco--}}
    {{--<input type="checkbox" name="style[]" value="Alternative rock">Alternative rock--}}
    {{--<br>--}}
    {{--<input type="checkbox" name="style[]" value="Rap">Rap&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Hip-Hop">Hip-Hop&nbsp;&nbsp;--}}
    {{--<input type="checkbox" name="style[]" value="Country">Country--}}
    {{--<input type="checkbox" name="style[]" value="Indy">Indy--}}
    {{--<br>--}}


{{--<input type="file" name="image">--}}
    {{--<br>--}}

    {{--<label for="submit"></label>--}}
    {{--<input type="submit" name="submit" value="submit" id="submit">--}}
{{--</form>--}}



@foreach($errors->all() as $error)
    <ul>
        <li style="color:red;">{{$error}} </li>
    </ul>

    @endforeach

@endsection
