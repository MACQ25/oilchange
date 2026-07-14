<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChecksController;



Route::get('/', function () {
    return view('form');
})->name('home');

Route::post('/check', [OilChecksController::class, 'store'])->name('oil-changes.store');


Route::get('/result/{id}', [OilChecksController::class, 'show'])->name('oil-changes.show');