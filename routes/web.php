<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'home']);
Route::get('/photos', [MenuController::class, 'photos']);
Route::get('/contact', [MenuController::class, 'contact']);
