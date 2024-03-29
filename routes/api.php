<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/home', function () {
    return view('home', [
        "title" => "Laravel 11 | Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']); //nama bebas bagian autenticate
Route::post('/logout', [LoginController::class, 'logout']); //nama bebas bagian autenticate

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route untuk mendapatkan data pengguna
Route::get('/user', [UserController::class, 'get'])->name('user');

// Route untuk memperbarui data pengguna
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

// Route buat Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('auth');
Route::get('/contact/create', [ContactController::class, 'create'])->middleware('auth');
Route::post('/contact/create', [ContactController::class, 'store'])->middleware('auth');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->middleware('auth');
Route::put('/contact/{id}/edit', [ContactController::class, 'update'])->middleware('auth');
Route::get('/contact/{id}/delete', [ContactController::class, 'destroy'])->middleware('auth');

// Route buat Address
Route::get('/address', [AddressController::class, 'index'])->name('address')->middleware('auth');
Route::get('/address/create', [AddressController::class, 'create'])->middleware('auth');
Route::post('/address/create', [AddressController::class, 'store'])->middleware('auth');
Route::get('/address/{id}/edit', [AddressController::class, 'edit'])->middleware('auth');
Route::put('/address/{id}/edit', [AddressController::class, 'update'])->middleware('auth');
Route::get('/address/{id}/delete', [AddressController::class, 'destroy'])->middleware('auth');
