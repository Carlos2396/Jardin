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

Route::get('/clases/crear', 'ClassController@index');
Route::post('/clases/crear', 'ClassController@index');

Route::get('/ordenes/crear', 'OrderController@create');
Route::post('/ordenes/crear', 'OrderController@store');

Route::get('/familias/crear', 'FamilyController@create');
Route::post('/familias/crear', 'FamilyController@store');

Route::get('/generos/crear', 'FamilyController@create');
Route::post('/generos/crear', 'FamilyController@store');

Route::get('/crear', function() {
    $classs = App\Classs::all();
    $orders = App\Order::all();
    $families = App\Family::all();
    $genders = App\Gender::all();

    return view('admin.create', compact('classs' ,'orders', 'families', 'genders'));
});