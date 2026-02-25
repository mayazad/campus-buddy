<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionBankController;



// Signup
use App\Http\Controllers\SignupController;
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.post');






// Question Bank
Route::get('/QuestionBank', [QuestionBankController::class, 'index'])->name('question-bank');
