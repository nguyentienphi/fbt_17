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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dangky','RegisterController@index')->name('dangky');
Route::post('getuser','RegisterController@getUser')->name('getuser');
Route::get('login','LoginController@index')->name('login');
Route::post('dangnhap','LoginController@getLogin')->name('dangnhap');
Route::get('dangxuat','LoginController@getLogout')->name('dangxuat');
