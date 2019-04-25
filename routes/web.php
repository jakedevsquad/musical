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

    //Lesson
    Route::resource('lesson', 'LessonController')->except(['create', 'edit', 'update', 'store']);
    Route::get('course/{course}/create-lesson', 'LessonController@create');
    Route::post('course/{course}/lesson', 'LessonController@store');
    Route::get('course/{course}/lesson/{lesson}/edit', 'LessonController@edit');
    Route::put('course/{course}/lesson/{lesson}', 'LessonController@update');
    Route::get('lesson-list/{course}', 'LessonController@lessonList');
    Route::post('lesson-order', 'LessonController@lessonOrder');
});

Route::group(['middleware' => ['auth', 'is.customer']], function () {
    Route::resource('catalog', 'CatalogController');
});




