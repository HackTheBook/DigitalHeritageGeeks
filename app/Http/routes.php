<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard',function(){
	$events = \App\Models\Event::orderBy('updated_at','desc')->take(4)->get();
	$latest = \App\Models\Log::orderBy('updated_at','desc')->take(4)->get();
	return view('dashboard',compact('events','latest'));
});
Route::controller('places','PlacesController');

Route::group(['middleware' => ['web'],'prefix' => 'api'], function () {
    //
});

Route::get('test',function(){
	return view('tsipras');
});