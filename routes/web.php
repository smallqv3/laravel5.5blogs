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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function(){
// 	return view('index');
// });
// Route::get('/', function(){
// 	return view('users');
// });
// Route::get('/user', 'UserController@index');
Route::get('/', 'StaticPagesController@home')->name('home'); // 首页
Route::get('/help', 'StaticPagesController@help')->name('help'); // 帮助
Route::get('/about', 'StaticPagesController@about')->name('about'); // 关于
Route::get('signup', 'UsersController@create')->name('signup'); // 注册
Route::resource('users', 'UsersController'); // 这里的代码将等同于以下代码形式
// Route::get('/users', 'UsersController@index')->name('users.index');
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// Route::get('/users/create', 'UsersController@create')->name('users.create');
// Route::post('/users', 'UsersController@store')->name('users.store');
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
// Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
Route::get('login', 'SessionsController@create')->name('login'); // 显示登录页面
Route::post('login', 'SessionsController@store')->name('login'); // 创建新会话(登录)
Route::delete('logout', 'SessionsController@destroy')->name('logout'); // 销毁会话(退出登录)