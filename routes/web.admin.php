<?php

Route::group([
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function() {
    Route::get('/', 'HomeController@index');
});