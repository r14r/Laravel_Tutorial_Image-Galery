<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('images', [ImagesController::class, 'index'])->name('images');

Route::prefix('images')->group(function () {

    Route::get('/add', function () {
        return view('images.add');
    })->name('images.add');

    Route::post('/add', [ImagesController::class, 'insert'])->name('images.insert');

    Route::get('/{img}', [ImagesController::class, 'show'])->name('images.show');
});
