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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::POST('/AddRecord', 'HomeController@ADD');
Route::get('/EditRecord/{id}', 'HomeController@EDIT');
Route::POST('/DeleteRecord', 'HomeController@DELETE');

//searching route
Route::get('search','HomeController@search');
Route::get('search/{name}','HomeController@show');
