@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <table class="table">
                    <tr>@include('search',['url'=>'home/search','link'=>'home/search'])</tr>
                </table>
                <br>

                <table class="table" style="text-align: center">
                    @foreach($artist as $art)
                        <tr>
                            <td>
                                <div><img src="{{URL::to('/image/'.$art->image)}}" alt="" width="300px" height="300px"></div>
                                <h4 style="color: #3dc9b3">{{$art->name}}</h4>
                                <div>
                                    <a href="artistname/{{$art->name}}"><em class="fa fa-eye btn btn-warning"></em></a>
                                    <a href="edit/{{$art->name}}"><em class="fa fa-pencil btn btn-primary"></em></a>
                                    <a href="delete/{{$art->id}}"><em class="fa fa-trash btn btn-danger"></em></a>
                                    <a href="insert"><button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
                                </div>
                                <br>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div style="text-align: center"> {!! $artist->links() !!} </div>
            </div>
        </div>
    </div>
@endsection