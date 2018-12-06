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
})->name('index');

Route::post('store/1', 'MembersController@store1')->name('store1');

Route::post('store/2', 'MembersController@store2')->name('store2');

Route::get('list', 'MembersController@getList')->name('list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
