<?php

Route::get('/', function() {
    return view('inicio');
});

Route::get('/especies', 'SpecieController@index')->name('/home');
Route::get('/especies/{specie}', 'SpecieController@show');
Route::get('/filter', 'SpecieController@filter');
Route::get('/order_options', 'OrderController@options');
Route::get('/family_options', 'FamilyController@options');
Route::get('/gender_options', 'GenderController@options');
Route::get('/search', 'SpecieController@search');

Route::get('logout', 'AdminController@logout');

Route::group(['middleware'=>'auth'], function() {
    Route::post('/clases/crear', 'ClaseController@store');
    Route::get('/editar/clase/{class}', 'ClaseController@edit');
    Route::post('/editar/clase/{class}', 'ClaseController@update');
    Route::get('/eliminar/clase/{class}', 'ClaseController@deleteClase');

    Route::post('/ordenes/crear', 'OrderController@store');
    Route::get('/editar/orden/{order}', 'OrderController@edit');
    Route::post('/editar/orden/{order}', 'OrderController@update');
    Route::get('/eliminar/orden/{order}', 'OrderController@deleteOrder');


    Route::post('/familias/crear', 'FamilyController@store');
    Route::get('/editar/familia/{family}', 'FamilyController@edit');
    Route::post('/editar/familia/{family}', 'FamilyController@update');
    Route::get('/eliminar/familia/{family}', 'FamilyController@deleteFamily');

    Route::post('/generos/crear', 'GenderController@store');
    Route::get('/editar/genero/{gender}', 'GenderController@edit');
    Route::post('/editar/genero/{gender}', 'GenderController@update');
    Route::get('/eliminar/genero/{gender}', 'GenderController@deleteGender');

    Route::post('/especies/crear', 'SpecieController@store');
    Route::get('/editar/especie/{specie}', 'SpecieController@edit');
    Route::post('/editar/especie/{specie}', 'SpecieController@update');
    Route::get('/eliminar/especie/{specie}', 'SpecieController@deleteSpecie');

    Route::post('/colores/crear', 'ColorController@store');
    Route::get('/editar/color/{color}', 'ColorController@edit');
    Route::post('/editar/color/{color}', 'ColorController@update');
    Route::get('/eliminar/color/{color}', 'ColorController@deleteColor');

    Route::post('/etiquetas/crear', 'LabelController@store');
    Route::get('/editar/etiqueta/{label}', 'LabelController@edit');
    Route::post('/editar/etiqueta/{label}', 'LabelController@update');
    Route::get('/eliminar/etiqueta/{label}', 'LabelController@deleteLabel');

    Route::get('/crear', 'AdminController@create');
    Route::get('/editar', 'AdminController@edit');
});

Auth::routes();
