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

Route::get('/thanhnguyen','CategoryController@getCategory');

Route::get('/', function () {
    return view('admin.layouts.index');
});

Route::group(['prefix' => 'admin','middleware' => 'admincheck'],function() {
    Route::get('/admin','CategoryController@index')->name('admin.index');
    Route::resource('category','CategoryController');
    Route::resource('provider','ProviderController');
    Route::resource('product','ProductController');
    Route::resource('role','RoleController');
    Route::resource('user','UserController');
    Route::resource('article','ArticleController');
    Route::resource('question','QuestionController');
    Route::resource('expert','ExpertController');
});

Route::get('/admin/login','AdminController@getLogin')->name('admin.login');
Route::post('/admin/login','AdminController@postLogin')->name('admin.loginpost');
Route::get('/admin/logout','AdminController@getLogout')->name('admin.logout');
//,'middleware' => 'admincheck'
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
