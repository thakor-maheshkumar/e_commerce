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

	  Route::get('/','UserController@dashboard');
	  Route::get('productcategory','UserController@productcategory');
	  Route::get('show/product/{id}','UserController@showproduct');
	  Route::get('cart/product','UserController@cartitem');
	  Route::get('cart/addItem/{id}','UserController@addItem');
	  Route::get('cart/remove/{id}','UserController@cartremove');
	  Route::get('user/createaddress','UserController@createaddress');
	  Route::post('user/storeaddress','UserController@storeaddress');
	  Route::get('user/showdetail','UserController@showdetail');
	  Route::get('category/record/{id}','UserController@record');
	  Route::post('order/store','UserController@orderstore');
//Route::get('/','UserController@dashboard')->middleware('user');

Auth::routes();

///For Category 

		Route::get('/home', 'HomeController@index');
		Route::get('category/list','CategoryController@index');
		Route::get('category/add','CategoryController@add');
		Route::post('category/store','CategoryController@store');
		Route::get('category/edit/{id}','CategoryController@edit');
		Route::post('category/update/{id}','CategoryController@update');
		Route::get('category/delete/{id}','CategoryController@delete');
		Route::get('product/list','ProductController@index');
		Route::get('product/add','ProductController@add');
		Route::post('product/store','ProductController@store');
		Route::get('product/edit/{id}','ProductController@edit');
		Route::post('product/update/{id}','ProductController@update');
		Route::get('product/delete/{id}','ProductController@delete');
		Route::get('user/list','UserController@index');
		Route::get('user/add','UserController@add');
		Route::post('user/store','UserController@store');
		Route::get('user/delete/{id}','UserController@delete');
		Route::get('ajaxrequest','HomeController@ajaxRequest');
		Route::post('ajaxrequestdata','HomeController@ajaxrequestdata');
		Route::get('validation','HomeController@validation');
		Route::post('validations','HomeController@validations');
/////	
		Route::get('placeorder','OrderController@placeorder');
		Route::get('bookpro','HomeController@bookpro');
		Route::get('getcity','HomeController@getcity');
		Route::get('getdate','HomeController@getdate');
		Route::get('ajax/list','AjaxController@list');
		Route::get('ajax/create','AjaxController@create');
		Route::post('ajax/store','AjaxController@store');
		Route::get('ajax/listData','AjaxController@listdata');
		Route::get('ajax/edit','AjaxController@editdata');
		Route::get('new/list','NewController@index');
		Route::post('new/store','NewController@store');
		Route::get('getDatalist','NewController@getDatalist');
		Route::get('new/edit','NewController@newedit');
		Route::post('new/update','NewController@newupdate');
		
		Route::get('session/get','SessionController@accessSessionData');
		Route::get('session/set','SessionController@storeSessionData');
		Route::get('session/remove','SessionController@deleteSessionData');
		Route::get('storedata/view','StoreController@storedata');
		Route::post('storedata/store','StoreController@store');


////For Product


////For Users

//Route::get('user/dashboard','UserController@dashboard');
/////////////////Get Data form category
Route::get('get/category','CategoryController@getcategory');
Route::get('get/categorydata/{id}','CategoryController@getcategorydata');

/////Jqyery And Ajax/////////

Route::get('student','StudentController@index')->middleware('student');


