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
    Route::get('/playvideo/{video}', 'VideoController@play');
    Route::get('video-list/{course}', 'VideoController@list');

    // Category
    Route::resource('category', 'CategoryController');
    Route::get('/category-list', 'CategoryController@list');

    // Course
    Route::resource('course', 'CourseController');
    Route::get('lesson-list/{course}', 'CourseController@lessonList');
    Route::delete('lesson/{lesson}', 'CourseController@destroyLesson');
    Route::get('course/{course}/create-lesson', 'CourseController@createLesson');
    Route::post('course/{course}/lesson', 'CourseController@addLesson');
});




