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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('news/create','Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); # laravel 13カリキュラムの課題③
    
    Route::get('profile/create','Admin\ProfileController@add');
    Route::post('profile/create','Admin\ProfileController@create');
    Route::post('profile/edit','Admin\ProfileController@update');# laravel 13カリキュラムの課題⑥
});


//「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
//Route::get('XXX', 'Admin\AAAController@BBB');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
