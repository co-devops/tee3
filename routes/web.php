<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/', function () {
    return view('user.login');
});
