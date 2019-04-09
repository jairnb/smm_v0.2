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
    return view('inicio');
});

Route::get('home', function () {
    return view('inicio');
})->name('home');

Route::get('apresentacao', function () {
    return view('apresentacao');
})->name('apresentacao');

Route::get('programacao', function () {
    return view('programacao');
})->name('programacao');

Route::get('contactar', function () {
    return view('contactar');
})->name('contactar');

Route::get('facaparte', function () {
    return view('facaparte');
})->name('facaparte');