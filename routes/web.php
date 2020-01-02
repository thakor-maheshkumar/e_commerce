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

Auth::routes(['verify'=>true]);

///For Category 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('category/list','CategoryController@index');
Route::get('category/add','CategoryController@add');
Route::post('category/store','CategoryController@store');
Route::get('category/edit/{id}','CategoryController@edit');
Route::post('category/update/{id}','CategoryController@update');
Route::get('category/delete/{id}','CategoryController@delete');

////For Product

Route::get('product/list','ProductController@index');
Route::get('product/add','ProductController@add');
Route::post('product/store','ProductController@store');
Route::get('product/edit/{id}','ProductController@edit');
Route::post('product/update/{id}','ProductController@update');
Route::get('product/delete/{id}','ProductController@delete');

////For Users
Route::get('user/list','UserController@index');
Route::get('user/dashboard','UserController@dashboard');