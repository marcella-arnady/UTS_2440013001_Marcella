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


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/category', function () {
//     return view('category');
// });

// Route::get('/publisher', function () {
//     return view('publisher');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', 'App\Http\Controllers\WebController@home');
Route::get('/books/{book}', 'App\Http\Controllers\WebController@book');
Route::get('/publisher', 'App\Http\Controllers\WebController@publisher');
Route::get('/contact', 'App\Http\Controllers\WebController@contact');
Route::get('/children', 'App\Http\Controllers\WebController@children');
Route::get('/middlegrade', 'App\Http\Controllers\WebController@middlegrade');
Route::get('/fiction', 'App\Http\Controllers\WebController@fiction');