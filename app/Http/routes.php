<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//INdex Controller
Route::get('/', 'MainController@index');

//Admin Controller
Route::get('/admin/product/new', 'ProductController@newProduct');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
Route::get('/admin/product/edit/{id}', 'ProductController@edit');
Route::post('/admin/product/save', 'ProductController@add');
Route::get('/admin/user/list', 'UserController@index');
Route::get('/admin/user/destroy/{id}', 'UserController@destroy');
Route::get('/admin/user/edit/{id}', 'UserController@edit');
Route::get('/admin/user/create', 'UserController@create');
Route::post('/admin/user/store', 'UserController@add');
Route::get('/api/products', 'RestFulController@products');
Route::get('/api/users', 'RestFulController@users');


Route::patch('/admin/product/edit/{id}',[
    'as' => 'product.edit',
    'uses' => 'ProductController@update'
]);

Route::patch('/admin/user/edit/{id}',[
    'as' => 'user.edit',
    'uses' => 'UserController@update'
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Product Cart
Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');