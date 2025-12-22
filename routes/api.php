<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\EksploreController;
use App\Http\Controllers\Api\CertificateController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('/siswa', SiswaController::class);
Route::apiResource('/user', UserController::class);
Route::apiResource('/profile', ProfileController::class);
Route::apiResource('/eksplore', EksploreController::class);

Route::post('/certificates', [CertificateController::class, 'store']);
Route::post('/portfolios', [PortfolioController::class, 'store']);
