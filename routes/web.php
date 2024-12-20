<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;

Route::get('/', function () {
    return redirect('/clubs');
});

Route::get('/clubs', [ClubController::class, 'index']);
Route::get('/club', [ClubController::class, 'show']);

Route::get('/clubs/create', [ClubController::class, 'create']);
Route::post('/clubs', [ClubController::class, 'store']);

Route::get('/clubs/{club}', [ClubController::class, 'show']);
Route::get('/clubs/{club}/edit', [ClubController::class, 'edit']);
Route::patch('/clubs/{club}', [ClubController::class, 'update']);

Route::delete('/clubs/{club}', [ClubController::class, 'destroy']);
