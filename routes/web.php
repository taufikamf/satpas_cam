<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('record');
});


Route::post('/save', function (Request $request) {
    $path =  \Storage::disk('public')->put('videos',$request->video);
    $url = \Storage::disk('public')->url($path);
    return $url;
});

Route::get('/info', 'InfoController@index');

Route::post('/info', 'InfoController@create')->name('info.create');