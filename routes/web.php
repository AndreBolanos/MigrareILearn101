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


Route::get('/', function () {
    return view('language');
})->middleware('guest');

Route::get('/en/login', function () {
    return view('en.auth.login');
})->middleware('guest');

Route::get('/en/home', 'HomeController@home')->name('home');
Route::post('/en/registerUser', 'RegisterUser@validateNewUser')->name('registerUser');


Auth::routes();