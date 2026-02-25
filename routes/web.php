<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionBankController;



// Auth routes
Route::get('/signup', [\App\Http\Controllers\Auth\SignupController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [\App\Http\Controllers\Auth\SignupController::class, 'register']);





// Question Bank
Route::get('/QuestionBank', [QuestionBankController::class, 'index'])->name('question-bank');
