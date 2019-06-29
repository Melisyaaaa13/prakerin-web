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
Route::get('/listtimeline', function () {
    return view('listtimeline');
});
Route::get('/detailstandart', function () {
    return view('detailstandart');
});
Route::get('/detailslim', function () {
    return view('detailslim');
});
Route::get('/detailsidebar', function () {
    return view('detailsidebar');
});
Route::get('/videoplayer', function () {
    return view('videoplayer');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/authors', function () {
    return view('authors');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/admin', function () {
    return view('backend');
});
//admin
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function () {
            return view('home');
        });
        Route::resource('kategori', 'Kategori_Controller');
        Route::resource('tag', 'Tag_Controller');
        Route::resource('artikel', 'Artikel_Controller');
    }
);
