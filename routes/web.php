<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolleyballController;

Route::get('/', function () {});

Route::get('/volleyballs', [VolleyballController::class, 'index']);

Route::get('/volleyballs/create', [VolleyballController::class, 'create']);

Route::get('/volleyballs/{id}', [VolleyballController::class, 'show']);

Route::post('/volleyballs', [VolleyballController::class, 'store']);

Route::get('/volleyballs/{id}/edit', [VolleyballController::class, 'edit']);

Route::patch('/volleyballs/{id}', [VolleyballController::class, 'update']);

Route::delete('/volleyballs/{id}', [VolleyballController::class, 'destroy']);