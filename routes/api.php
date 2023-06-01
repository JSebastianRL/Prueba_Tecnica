<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('Users')->group(function () {

	Route::get('/GetAllUsers', [UserController::class, 'getAllUsers']);
	Route::get('/GetAllUsers', [UserController::class, 'getAllUsers']);
	Route::get('/GetAllUsers', [UserController::class, 'getAllUsers']);

});

