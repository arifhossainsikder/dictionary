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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FrontController@index')->name('front');

Route::post('/fetchsearch','FrontController@fetch')->name('fetch.search');

Route::post('/like','FrontController@like')->name('like');

Route::get('/word', 'FrontController@index');

Route::get('/word/{id}', 'FrontController@show')->name('word.show');

Auth::routes();



Route::group(['middleware'=>'admin'], function () {
	Route::get('/home', 'AdminController@index')->name('home');
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::resource('admin/words','AdminWordsController');

});



Route::middleware(['admin','superadmin'])->group(function () {
	Route::resource('admin/users','AdminUsersController');
});
