<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// 新規投稿ページ
Route::get('/create', [App\Http\Controllers\HomeController::class,'create']);
// 詳細ページ
Route::get('/show/{id}','HomeController@show')->name('show');
//登録処理
Route::post('/home', 'HomeController@store')->name('store');
//編集
Route::get('/edit{id}', 'HomeController@edit')->name('edit');
Route::post('/update', 'HomeController@update')->name('update');
//削除
Route::post('/delete{id}', 'HomeController@destroy')->name('destroy');

