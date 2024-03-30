<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Route::get('/', function () {
//   return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);
Route::resource('user', UserController::class);