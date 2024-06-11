<?php

use App\Http\Controllers\Calculate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});