<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');
Route::get('/contact', [PageController::class, 'about_us'])->name('contact');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/detail/{slug}', [ProductController::class, 'detail'])->name('detail');