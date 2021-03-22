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
    Route::get('/client', 'HomeController@index');
    Route::post('/client-save', );
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['admin', 'auth']], function(){
    //Posts
    Route::get('/creator/all-posts','Creator\PostController@index');
    Route::post('/save-post', 'Creator\PostController@store');
    Route::get('/edit-post/{id}', 'Creator\PostController@edit');
    Route::put('post-update/{id}','Creator\PostController@update');
    Route::delete('/delete-post/{id}','Creator\PostController@destroy');
    Route::get('/creator/contents-bin','Creator\PostController@trashed');
    Route::get('/restore/{id}','Creator\PostController@restore')->name('posts.restore');
    Route::delete('delete-permanently/{id}','Creator\PostController@delete');


    //Category
    Route::get('/creator/add-category', 'Creator\CategoryController@index');
    Route::post('/save-category','Creator\CategoryController@store');
    Route::get('/category-edit/{id}', 'Creator\CategoryController@edit');
    Route::put('/category-update/{id}', 'Creator\CategoryController@update');
    Route::delete('/category-delete/{id}', 'Creator\CategoryController@destroy');


    //User Profile
    Route::get('creator/profile', 'Creator\ProfileController@index');
    Route::put('profile', ['as' => 'profile.update', 'uses'=>'Creator\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' =>'Creator\ProfileController@password']);
});

// Dashboard Page
Route::get('/creator', 'Creator\CreatorController@index')->middleware(['admin', 'auth']);

//Dashboard Create
Route::get('/create', 'Creator\PostController@create')->name('posts.create')->middleware('auth');


//Single Page
// Route::get('/{category:name}', 'HomeController@show')->name('posts.show');
Route::get('/{category:name}/{post:slug}','HomeController@show')->name('posts.show');


//Search Posts
Route::get('/searchpost', 'HomeController@search')->name('searchpost');

Route::get('/keyboard', 'HomeController@key');


 Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay')->middleware('auth');

// // The callback url after a payment

 Route::get('/payment/callback',  'PaymentController@handleGatewayCallback')->name('callback');

// Route::post('/pay', 'FlutterwaveController@initialize')->name('pay');
// // The callback url after a payment
// Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');

require __DIR__.'/auth.php';
