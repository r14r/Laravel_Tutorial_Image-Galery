<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('galeria', [GaleriaController::class, 'index'])->name('galeria');

Route::prefix('galeria')->group(function () {

    Route::get('/inserir', function () {
        return view('galeria.inserir');
    })->name('galeria.inserir');

    Route::post('/inserir', [GaleriaController::class, 'insert'])->name('galeria.insert');

    Route::get('/{img}', [GaleriaController::class, 'show'])->name('galeria.show');
});
