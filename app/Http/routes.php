<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect','SocialAuthController@redirect');
Route::get('/callback','SocialAuthController@callback');

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get("home/insert","testing@create");
Route::post("home/store","testing@store");
Route::get("home/viewall","testing@showall");



Route::get("home/artistname/{name}","testing@show");
Route::get("home/edit/{name}","testing@edit");
Route::patch('home/edit/update/{id}',"testing@update");
Route::get("home/delete/{id}","testing@destroy");


Route::get('home/adminall',"HomeController@showall");
Route::get('home/search',"testing@search");
Route::get('home/adminall/search',"testing@searchadmin");


//calendar
//Route::get('home/calendar',"CalendarController@index");
//Calendar Controller


////frontend


Route::get('index',"testing@frontendindex");
Route::get('browse',"testing@frontendbrowse");
Route::get('/artistname/{name}',"testing@frontendprofile");

//    Route::get('index', function () {
//        return view('frontend.index');
//    });