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
    return view('homepage');
})->name('homepage');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/exercises', function () {
    return view('exercises');
})->name('exercises');