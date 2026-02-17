<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Feature routes removed for main branch structure
// Each feature branch will add its own routes back
