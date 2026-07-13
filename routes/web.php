<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChecksController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('form');
});

Route::post('/check', [OilChecksController::class, 'store'])->name('oil-changes.store');


Route::get('/result/{id}', [OilChecksController::class, 'show'])->name('oil-changes.show');