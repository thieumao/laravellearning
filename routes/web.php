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
Route::get('/', 'ETS2020\HomeController@index')->name('home');

// Route::resource('name', 'NameController')->except(['create', 'edit']);
Route::resource('name', 'NameController')->only(['index']);

Route::prefix('ETS2020')->namespace('ETS2020')->group(function () {
    Route::get('/learning', 'LearningController@index')->name('learning');
    Route::get('/learning/create', 'LearningController@create')->name('learning.create');
    Route::post('/learning/store', 'LearningController@store')->name('learning.store');
    Route::put('/learning/update', 'LearningController@update')->name('learning.update');

    Route::get('/test{id}', 'TestController@index')->name('test');
    Route::get('/test{id}/part{partid}', 'PartController@index')->name('test.part');
    Route::get('/test{id}/part{partid}/question{questionid}', 'QuestionController@index')->name('test.part.question')->where('questionid', '[0-9]+');
});

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/news/{id}', function ($id) {
    return "Bài viết số ${id}";
});

Route::get('/news/{id}/category/{categoryId}', function ($id, $categoryId) {
    return "Bài viết số ${id} với ${categoryId}";
});

Route::get('/product', function () {
    return 'Product Screen';
});

Route::get('/welcome', function () {
    return view('welcome');
});