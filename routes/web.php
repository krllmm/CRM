<?php

use Illuminate\Support\Facades\Route;

Route::view('/welcome', 'welcome');

Route::view('/dashboard', 'dashboard.dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
