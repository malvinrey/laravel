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

use App\Http\Controllers\TugasController;

Route::prefix('tugas')->group(function () {
    Route::prefix('pertemuan1')->group(function () {
        Route::get('/linktree', [TugasController::class, 'linktree'])->name('tugas.pertemuan1.linktree');
    });

    Route::prefix('pertemuan2')->group(function () {
        Route::get('/hello', [TugasController::class, 'hello'])->name('tugas.pertemuan2.hello');
        Route::get('/style', [TugasController::class, 'style'])->name('tugas.pertemuan2.style');
        Route::get('/style2', [TugasController::class, 'style2'])->name('tugas.pertemuan2.style2');
    });

    Route::prefix('pertemuan3')->group(function () {
        Route::get('/responsive1', [TugasController::class, 'responsive1'])->name('tugas.pertemuan3.responsive1');
    });

    Route::prefix('pertemuan5')->group(function () {
        Route::get('/desainwireframe', [TugasController::class, 'desainwireframe'])->name('tugas.pertemuan5.desainwireframe');
    });

    Route::prefix('pertemuan7')->group(function () {
        Route::get('/form', [TugasController::class, 'form'])->name('tugas.pertemuan7.form');
        Route::get('/template', [TugasController::class, 'template'])->name('tugas.pertemuan7.template');
    });
});

