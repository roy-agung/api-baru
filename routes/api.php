<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\EksploreController;

Route::apiResource('/siswa', SiswaController::class);
Route::apiResource('/user', UserController::class);
Route::apiResource('/profile', ProfileController::class);
Route::apiResource('/eksplore', EksploreController::class);
