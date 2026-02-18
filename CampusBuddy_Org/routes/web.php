<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/login');
});

// Community routes
Route::get('/comunity', [CommunityController::class, 'index'])->name('community');
// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/Dashboard1', function () {
    return redirect('/dashboard');
}); // Redirect legacy
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
