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
Route::get('/', function() {
    return redirect('/especies');
});

Route::get('/especies', 'SpecieController@index');
Route::get('/especies/{specie}', 'SpecieController@show');

Route::post('/clases/crear', 'ClaseController@store');

Route::post('/ordenes/crear', 'OrderController@store');

Route::post('/familias/crear', 'FamilyController@store');

Route::post('/generos/crear', 'GenderController@store');

Route::post('/especies/crear', 'SpecieController@store');

Route::get('/crear', function() {
    $classes = App\Clase::all();
    $orders = App\Order::all();
    $families = App\Family::all();
    $genders = App\Gender::all();
    $species = App\Specie::all();

    return view('admin.create', compact('classes' ,'orders', 'families', 'genders', 'species'));
});