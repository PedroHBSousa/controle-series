<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->only(['index', 'create', 'store', 'destroy']);

// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index');
//     Route::get('/series/criar', 'create');
//     Route::post('/series/salvar', 'store');
// });
// Route::delete('/series/destroy/{id}', [SeriesController::class, 'destroy'])
//     ->name('series.destroy');
