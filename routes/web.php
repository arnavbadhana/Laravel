<?php

use App\Http\Controllers\Calculate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::resource('user', UserController::class);