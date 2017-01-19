<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\artist;
use App\users;

use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use DB;

class testing extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view("insert");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'profile' => 'required',
        ]);

        $artist = new artist;
        $artist->name = Input::get("name");
        $artist->profile = Input::get("profile");
        $artist->facebook = Input::get("facebook");
        $artist->youtube = Input::get("youtube");
        $artist->style = implode(", ", Input::get("style"));
        if (Input::hasFile("image")) {
            $files = Input::file('image');
            $name = time() . "_" . $files->getClientOriginalName();
            $image = $files->move(public_path() . '/image', $name);
            $artist->image = $name;
        }

        $artist->save();
        return redirect('home/viewall');
    }


    public function showall()
    {
        $artist = artist::paginate(4);
        return view("viewall", compact('artist'));
    }


    public function show($name)
    {
        $artist = DB::table("artist")->where('name', $name)->first();
//        $artist = artist::find($id);
        return view('artistname', compact('artist'));
    }


    public function edit($name)
    {
        $artist = DB::table("artist")->where('name', $name)->first();
//        $artist = artist::find($id);
        return view('edit', compact('artist'));
    }


    public function update(Request $request, $id)
    {
        $artist = artist::find($id);
        $artist->name = Input::get("name");
        $artist->profile = Input::get("profile");
        $artist->facebook = Input::get("facebook");
        $artist->youtube = Input::get("youtube");
        $artist->style = implode(", ", Input::get("style"));
        if (Input::hasFile("image")) {
            $files = Input::file('image');
            $name = time() . "_" . $files->getClientOriginalName();
            $image = $files->move(public_path() . '/image', $name);
            $artist->image = $name;
        }

        $artist->save();
        return redirect('home/viewall');
    }


    public function destroy($id)
    {
        $artist = artist::find($id);
        $artist->delete();
        return redirect('home/viewall');
    }


    //////////////////////////////////////// search function /////////////////////////////////////////////

    public function search()
    {

        $search = \Request::get('search');

        $artist = artist::where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(20);

        return view('viewall', compact('artist'));
    }

    public function searchadmin()
    {

        $search = \Request::get('search');

        $users = users::where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(20);

        return view('adminall', compact('users'));
    }


    /////////////////view frontend ///////////////////

    public function frontendindex()
    {
        $artist = artist::paginate(3);
        return view("frontend.index", compact('artist'));
    }

    public function frontendbrowse()
    {
        $artist = artist::paginate(3);
        return view("frontend.browse", compact('artist'));
    }

    public function frontendprofile($name)
    {
        $artist = DB::table("artist")->where('name', $name)->first();
//        $artist = artist::find($id);
        return view("frontend.profile", compact('artist'));
    }
}

