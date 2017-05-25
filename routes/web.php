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


Route::get('admin/index','backend\AdminController@index');
Route::get('mail/index','backend\MailController@index');
Route::get('user/index','backend\UserController@index');
Route::get('category/index','backend\CategoryController@index');
Route::get('article/index','backend\ArticleController@index');
Route::get('user/edit/{id}','backend\UserController@edit');
Route::post('user/change','backend\UserController@change');
Route::get('user/del/{id}','backend\UserController@edit');

Auth::routes();


Route::get('admin/login', 'backend\AdminController@index');
Route::get('/', 'backend\AdminController@index');
