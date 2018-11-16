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
use App\Product;

Route::get('/','PagesController@index');
Route::get('/trangchu','PagesController@index')->name('pages.trangchu');
Route::get('/mypham','PagesController@getMyPham')->name('pages.mypham');
Route::get('/thoitrang','PagesController@getThoiTrang')->name('pages.thoitrang');
Route::get('/tintuc','PagesController@getTintuc')->name('pages.tintuc');
Route::get('mypham1',function (){
    $product = Product::find(2);
    echo $product->category->category_parent_id;
});
Route::group(['prefix' => 'admin','middleware' => 'admincheck'],function() {

    Route::get('/admin','CategoryController@index')->name('admin.index');
    //khi chạy câu lệnh php artisan make:controller --resource
    Route::resource('category','CategoryController');
    Route::resource('parent','TblParentController');
    Route::resource('provider','ProviderController');
    Route::resource('product','ProductController');
    Route::resource('role','RoleController');
    Route::resource('user','UserController');
    Route::resource('article','ArticleController');
    Route::resource('question','QuestionController');
    Route::resource('expert','ExpertController');
    Route::resource('slide','SlideController');

    Route::group(['prefix' => 'ajax'],function() {
        Route::get('category/{category_parent_id}','AjaxController@getCategory');
    });
});

Route::get('/admin/login','AdminController@getLogin')->name('admin.login');
Route::post('/admin/login','AdminController@postLogin')->name('admin.loginpost');
Route::get('/admin/logout','AdminController@getLogout')->name('admin.logout');

