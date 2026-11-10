<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\VeiculoController;


Route::get('/', function () {
    return redirect()->route('veiculos.index');
});

Route::resource('marcas', MarcaController::class);
Route::resource('veiculos', VeiculoController::class);
