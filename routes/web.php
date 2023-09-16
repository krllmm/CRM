<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::view('/dashboard', 'dashboard.dashboard');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('project', ProjectController::class);
Route::resource('client', ClientController::class);
Route::resource('task', TaskController::class);
Route::resource('user', UserController::class);
