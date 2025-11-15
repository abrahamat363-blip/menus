<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contact', function () {
    return view('contact');
});
=======
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'home']);
Route::get('/photos', [MenuController::class, 'photos']);
Route::get('/contact', [MenuController::class, 'contact']);
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
