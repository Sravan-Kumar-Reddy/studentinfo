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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routing in the form of student/....
Route::resource('students','StudentController');

//Routing in the form of instructor/....
Route::resource('instructors','InstructorController');

//Routing in the form of student/....
Route::resource('courses','CourseController');