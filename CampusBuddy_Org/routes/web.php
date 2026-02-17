<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;

Route::get('/', function () {
    return redirect('/login');
});

// Community routes
Route::get('/comunity', [CommunityController::class, 'index'])->name('community');
