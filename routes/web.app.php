<?php

Route::get('/', 'MembersController@index')->name('index');

Route::post('store/1', 'MembersController@store1')->name('store1');

Route::post('store/2', 'MembersController@store2')->name('store2');

Route::get('list', 'MembersController@getList')->name('list');