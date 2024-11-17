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

// Main Page
Route::get('/', function () {
    return view('index');
});

// Existing routes for the form
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

// UtsController route
Route::get('/index', 'App\Http\Controllers\UtsController@index');
Route::get('/about', 'App\Http\Controllers\UtsController@about');
Route::get('/contohisi', 'App\Http\Controllers\UtsController@contohisi');
Route::get('/langganan', 'App\Http\Controllers\UtsController@langganan');
Route::get('/contact', 'App\Http\Controllers\UtsController@contact');

// Add additional routes as needed
Route::get('/about', function () {
    return view('about');
});

Route::get('/contohisi', function () {
    return view('contohisi');
});

Route::get('/langganan', function () {
    return view('langganan');
});

Route::get('/contact', function () {
    return view('contact');
});
