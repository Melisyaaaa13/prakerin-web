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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('backend');
});
Route::get('about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contack', function () {
    return view('contack');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/work-single', function () {
    return view('work-single');
});
