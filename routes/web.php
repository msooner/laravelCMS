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

Auth::routes();

Route::get('/curl', 'HomeController@index');
Route::post('/login', 'Api\v1\AuthApiController@login');


Route::get('admin/login', 'Backend\LoginController@showLoginForm')->name('admin.login');

Route::post('admin/login', 'Backend\LoginController@login');
//后台登录
Route::get('admin/messages/status.get', 'Backend\MessagesController@statusGet');
Route::get('admin/messages/user.response', 'Backend\MessagesController@ResponseGet');
Route::group(['namespace' => 'Backend', 'prefix' => 'admin','middleware' => 'PUPU'], function () {

    Route::get('users', 'UsersController@index');
    Route::get('usersEdit', 'UsersController@editUser');
    Route::get('usersCreate', 'UsersController@createUser');
    Route::get('verify', 'VerifyController@verify');

    Route::get('products', 'ProductsController@index');
    Route::get('mails', 'MailController@index');
    Route::get('products.check', 'ProductsController@check');
    Route::get('products.pass/{id}', 'ProductsController@pass');
    Route::get('products.create', 'ProductsController@create');
    Route::post('products.created', 'ProductsController@created');

    Route::get('goods', 'GoodsController@index');
    Route::get('roles', 'RolesController@index');
    Route::get('good.create', 'GoodsController@addGood');
    Route::get('permissions', 'PermissionsController@index');


    Route::get('messages', 'MessagesController@index');
    Route::get('messages/response', 'MessagesController@response');
    Route::get('messages/sum', 'MessagesController@sum');





    //role
    Route::get('create.role', 'RolesController@createRole');
    Route::get('edit.role/{id}', 'RolesController@editRole');
    Route::post('edited.role', 'RolesController@editedRole');
    Route::post('created.role', 'RolesController@createdRole');
    Route::any('deleted.role/{id}', 'RolesController@deletedRole');
    //permission
    Route::get('create.permission', 'PermissionsController@createPermission');
    Route::get('edit.permission/{id}', 'PermissionsController@editPermission');
    Route::post('edited.permission', 'PermissionsController@editedPermission');
    Route::post('created.permission', 'PermissionsController@createdPermission');
    Route::any('deleted.permission/{id}', 'PermissionsController@deletedPermission');
    //superuser
    Route::get('superUsers', 'SuperUserController@index');
    Route::post('search', 'SuperUserController@search');
    Route::post('created.admin', 'SuperUserController@created');
    Route::get('create.admin', 'SuperUserController@create');

    Route::get('dash', 'DashController@dash');
    Route::get('errors', 'ErrorsController@index');
    Route::get('logs', 'ErrorsController@log');
    Route::get('createAdmin', 'SuperUserController@addAdmin');
    Route::get('profile', 'ProfileController@index');
    Route::post('upload', 'ProfileController@upload');

    Route::get('switches', 'AppController@swi');
    Route::get('switch/{status}/by/{id}', 'AppController@switchStatus');


    Route::any('logout', 'LoginController@logout');




});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
