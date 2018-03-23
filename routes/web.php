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
Route::get('dangnhap','LoginController@index')->name('dangnhap');
Route::post('getlogin','LoginController@getLogin')->name('getlogin');
Route::post('dangxuat','LoginController@getLogOut')->name('dangxuat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('trangchu',['as' => 'trangchu',function(){
	return view('user.HomePage');
}]);
Route::get('danhmucsanpham',function(){
	return view('user.ProductPortfolio');
});
Route::get('chitietsanpham',function(){
	return view('user.ProductDetails');
});
