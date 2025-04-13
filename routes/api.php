<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroApi;
use App\Http\Controllers\UniverseApi;
use App\Http\Controllers\GenderApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/universes',[UniverseApi::class, 'index']);
//Route::get('/universes/{name}',[UniverseApi::class, 'show']); 
Route::get('/universes/{param}', [UniverseApi::class, 'show']);


Route::get('/superheroes',[SuperheroApi::class, 'index']);
//param para buscar por id o name
Route::get('/superheroes/{param}', [SuperheroApi::class, 'show']);

Route::get('/genders',[GenderApi::class, 'index']);
Route::get('/genders/{param}', [GenderApi::class, 'show']);
