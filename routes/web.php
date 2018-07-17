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

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');

Route::get('users/logout', 'Auth\LoginController@logout');

Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');

//Route::get('posts/create', 'PostCreator\PostController@create');
Route::group(array('prefix'=>'postcreator', 'namespace'=>'PostCreator', 'middleware'=>'postmiddleware'), function () {
   Route::get('posts/create', 'PostController@create');
});

Route::group(array('prefix'=>'admin', 'namespace'=>'admin', 'middleware'=>'manager'), function (){
   Route::get('/', 'AdminController@index');

    Route::get('users', 'UserController@index');

   Route::get('roles', 'RoleController@index');
   Route::get('roles/create', 'RoleController@create');
   Route::post('roles/create', 'RoleController@store');

   Route::get('user/{id}/edit', 'UserController@edit');
   Route::post('user/{id}/edit', 'UserController@update');

   Route::get('category', 'CategoryController@index');
   Route::get('category/create', 'CategoryController@create');
   Route::post('category/create', 'CategoryController@store');
   Route::get('category/{id}/edit', 'CategoryController@edit');
   Route::post('category/{id}/edit', 'CategoryController@update');
});
