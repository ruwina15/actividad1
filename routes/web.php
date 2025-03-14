<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\http\Controllers\GenderController;
use App\http\Controllers\GenreController;
use App\http\Controllers\UniverseController;
use App\http\Controllers\SuperheroeController;

Route::get('/', function () {
    echo 'hello guys this is my first app';
    dump(Universe::all());
    
});


Route::resource('gender', GenderController::class);
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroeController::class);

//para ver la tabla se pone /universes
//para ver el formulario para crear /universes/create
