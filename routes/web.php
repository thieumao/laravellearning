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
    return view('home');
});

Route::get('/news/{id}', function ($id) {
    return "Bài viết số ${id}";
});

Route::get('/test', function () {
    return 'Testing';
});

Route::get('/user', function () {
    return 'User Screen';
});

Route::get('/product', function () {
    return 'Product Screen';
});

Route::get('/welcome', function () {
    return view('welcome');
});