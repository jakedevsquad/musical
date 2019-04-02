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
    return view('welcome');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'is.admin']], function () {
    // Video
    Route::resource('video', 'VideoController')->except('update');
    Route::post('video/{video}', 'VideoController@update')->name('video.update');

    // Category
    Route::resource('category', 'CategoryController');
});


Route::get('/playvideo/{video}', 'VideoController@play');

