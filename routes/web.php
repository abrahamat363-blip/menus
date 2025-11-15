<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MenuController::class, 'home']);
Route::get('/photos', [MenuController::class, 'photos']);
Route::get('/contact', [MenuController::class, 'contact']);

