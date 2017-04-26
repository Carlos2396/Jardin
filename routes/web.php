<?php

Route::get('/', function() {
    return redirect('/especies');
});

Route::get('/especies', 'SpecieController@index');
Route::get('/especies/{specie}', 'SpecieController@show');

Route::group(['middleware'=>'auth'], function() {
    Route::post('/clases/crear', 'ClaseController@store');
    Route::get('/editar/clase/{class}', 'ClaseController@edit');
    Route::post('/editar/clase/{class}', 'ClaseController@update');
    Route::get('/eliminar/clase/{class}', 'ClaseController@delete');

    Route::post('/ordenes/crear', 'OrderController@store');
    Route::get('/editar/orden/{order}', 'OrderController@edit');
    Route::post('/editar/orden/{order}', 'OrderController@update');

    Route::post('/familias/crear', 'FamilyController@store');
    Route::get('/editar/familia/{family}', 'FamilyController@edit');
    Route::post('/editar/familia/{family}', 'FamilyController@update');

    Route::post('/generos/crear', 'GenderController@store');
    Route::get('/editar/genero/{gender}', 'GenderController@edit');
    Route::post('/editar/genero/{gender}', 'GenderController@update');

    Route::post('/especies/crear', 'SpecieController@store');
    Route::get('/editar/especie/{specie}', 'SpecieController@edit');
    Route::post('/editar/especie/{specie}', 'SpecieController@update');
    Route::get('/eliminar/especie/{specie}', 'SpecieController@deleteSpecie');

    Route::post('/colores/crear', 'ColorController@store');
    Route::get('/editar/color/{color}', 'ColorController@edit');
    Route::post('/editar/color/{color}', 'ColorController@update');

    Route::post('/etiquetas/crear', 'LabelController@store');
    Route::get('/editar/etiqueta/{label}', 'LabelController@edit');
    Route::post('/editar/etiqueta/{label}', 'LabelController@update');

    Route::get('/crear', 'AdminController@create');
    Route::get('/editar', 'AdminController@edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
