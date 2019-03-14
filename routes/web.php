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

Route::get('Layouts', function () {
    return view('Layouts.master');
});

Route::get('Dashboard', function () {
    return view('Dashboard/dashboard');
});
Route::get('Dashboard2', function () {
    return view('Dashboard.dashboard');
});
Route::get('Master', function () {
    return view('Layouts.master');
});
Route::get('App', function () {
    return view('Master.app');
});
Route::get('kategori', function () {
    return view('kategori');
});
/*Route::group(['middleware'=>['web']], function(){
	Route::resource('/kategori', 'KategoriController');
	Route::get('search', 'KategoriController@search');
})*/

Route::get('/search', 'KategoriController@cari')->name('post.search');
//Route::resource('kategori', 'KategoriController')->except(['destroy']);