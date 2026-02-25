<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/', function () {
    return redirect('/login');
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Forgot Password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot-password.send');

// Reset Password
Route::get('/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('reset-password');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset-password.update');

// Dashboard
Route::get('/Dashboard1', function () {
    return redirect('/dashboard');
}); // Redirect legacy
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
