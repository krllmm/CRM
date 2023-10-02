<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


// Route::view('/', 'welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::view('/settings', 'settings')->name('settings');

//Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('project', ProjectController::class);
Route::resource('client', ClientController::class);
Route::resource('task', TaskController::class);
Route::resource('worker', WorkerController::class);

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/create_account', [UserController::class, 'create'])->name('create_account');
Route::get('/sign_in', [UserController::class, 'sign_in'])->name('sign_in');
