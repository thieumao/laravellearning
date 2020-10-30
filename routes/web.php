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
})->name('home');

Route::prefix('ETS2020')->group(function () {
    Route::get('/test{id}', function ($id) {
        return "Test ${id}";
    })->name('test');
    
    Route::get('/test{id}/part{partid}', function ($id, $partid) {
        return "Test ${id} - Part ${partid}";
    })->name('test.part');
    
    Route::get('/test{id}/part{partid}/question{questionid}', function ($id, $partid, $questionid) {
        return "Test ${id} - Part ${partid} - Question ${questionid}";
    })->name('test.part.question')->where('questionid', '[0-9]+');
});


// Route::group(['prefix' => 'ETS2020'], function () {
//     Route::get('/test{id}', function ($id) {
//         return "Test ${id}";
//     })->name('test');
    
//     Route::get('/test{id}/part{partid}', function ($id, $partid) {
//         return "Test ${id} - Part ${partid}";
//     })->name('test.part');
    
//     Route::get('/test{id}/part{partid}/question{questionid}', function ($id, $partid, $questionid) {
//         return "Test ${id} - Part ${partid} - Question ${questionid}";
//     })->name('test.part.question')->where('questionid', '[0-9]+');
// });

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