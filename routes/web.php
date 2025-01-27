<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('register', 'index')->name('register');
    Route::post('register', 'registerUser')->name('user.register');
});
