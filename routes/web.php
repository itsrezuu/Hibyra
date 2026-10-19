<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', [StoreController::class, 'home']);
Route::get('/menu', [StoreController::class, 'menu']);
Route::redirect('/product', '/menu');
Route::get('/about', function () {
    return view('about');
});
Route::get('/visit', function () {
    return view('visit');
});
