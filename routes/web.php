<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.front-page.index');
});
// Route::get('login', 'UserController@index')->name('user');
