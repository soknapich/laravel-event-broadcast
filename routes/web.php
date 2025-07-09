<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::controller(UserController::class)->group(function () {
//Route::get('register', 'index')->name('register');
Route::get('register', [UserController::class, 'index'])->name('register');
Route::get('registerUser', [UserController::class, 'registerUser'])->name("registerUser");
//});
