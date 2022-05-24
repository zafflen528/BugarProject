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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/resep', function () {
    return view('resep');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/bmi', function () {
    return view('bmi');
});
Route::get('/gizi', function () {
    return view('gizi');
});

Route::get('/rawon', function () {
    return view('rawon');
});
Route::get('/gado', function () {
    return view('gado');
});
Route::get('/rujak', function () {
    return view('rujak');
});
Route::get('/form', function () {
    return view('formtraining');
});
require __DIR__.'/auth.php';
