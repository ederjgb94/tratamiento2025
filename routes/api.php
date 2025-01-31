<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/holamundo',  function () {
    return response()->json(['message' => 'Hola Mundo 2']);
});

Route::post('/saluda', function (Request $request) {
    return response()->json(['message' => 'Hola '.$request->name2]);
});

Route::apiResource('pets', 'App\Http\Controllers\PetController');

// Route::get('/pets', 'App\Http\Controllers\PetController@index');
// Route::post('/pets', 'App\Http\Controllers\PetController@store');
// Route::get('/pets/{pet}', 'App\Http\Controllers\PetController@show');
// Route::put('/pets/{pet}', 'App\Http\Controllers\PetController@update');
// Route::delete('/pets/{pet}', 'App\Http\Controllers\PetController@destroy');