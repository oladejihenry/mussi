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



Route::get('/', 'HomeController@index');


Route::group(['middleware' => ['auth']], function (){
    Route::get('/client', 'Client\ClientController@index');
    Route::post('/client-save', );
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['admin', 'auth']], function(){
    //Posts
    Route::get('/creator/all-posts','Creator\PostController@index');
    Route::post('/save-post', 'Creator\PostController@store');
    Route::delete('/delete-post/{id}','Creator\PostController@destroy');
    Route::get('/creator/contents-bin','Creator\PostController@trashed');
    Route::get('/restore/{id}','Creator\PostController@restore')->name('posts.restore');
    Route::delete('delete-permanently/{id}','Creator\PostController@delete');


    //Category
    Route::get('/creator/add-category', 'Creator\CategoryController@index');
    Route::post('/save-category','Creator\CategoryController@store');
});

// Dashboard Page
Route::get('/creator', 'Creator\CreatorController@index')->middleware(['admin', 'auth']);

//Dashboard Create
Route::get('/create', 'Creator\PostController@create')->name('posts.create')->middleware('auth');

require __DIR__.'/auth.php';
