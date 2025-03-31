<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

// Existing routes for static views:
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/reset-password', function () {
    return view('resetpassword');
});

// Additional routes for dynamic behavior:
Route::get('/register-form', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register-form', [RegisterController::class, 'submitForm'])->name('register.submit');
Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/success', function () { return view('success'); })->name('success');
