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

// One TO One

Route::get('one-to-one', 'OneToOneController@oneToOne');

Route::get('/', function () {
    return view('welcome');
});
