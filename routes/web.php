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

Route::get('/especies', function () {
    return view('specie.index');
});

Route::get('/especies/show', function () {
    return view('specie.show');
});

Route::get('/especies/show1', function () {
    return view('specie.show1');
});

Route::get('/clases', function () {
    return view('class.index');
});

Route::get('/ordenes', function () {
    return view('specie.index');
});

Route::get('/familias', function () {
    return view('specie.index');
});