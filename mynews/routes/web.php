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
Route::group(['prefix' => 'admin'], function () {
    route::get('news/create', 'Admin\NewsController@add');
});

Route::get('bbb', 'Bbb\AAAController@add');

Route::group(['prefix' => 'admin'], function () {
    route::get('profile/create', 'Admin\ProfileController@add');
    route::get('profile/edit', 'Admin\ProfileController@edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('news/create', 'Admin\NewsController@add') ->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
});

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/cerate', 'Admin\ProfileController@create');
    Route::get('profile', 'Admin\ProfileController@index');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::get('profile/edit', 'Admin\ProfileController@add');
    Route::post('profile/edit', 'Admin\ProfileController@update');
});
Route::get('/', 'NewsController@index');
