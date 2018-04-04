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

Route::group(['namespace' => 'Seckill'], function(){
    // 控制器在 "App\Http\Controllers\Home" 命名空间下
    Route::get('/insertdata', [
        'as' => 'index', 'uses' => 'TestController@index'
    ]);
     
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


