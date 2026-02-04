<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', [DashboardController::class, 'index']);

// Halaman Form
Route::get('/register', [FormController::class, 'register']);

// Halaman Welcome (Proses Form)
Route::post('/welcome', [FormController::class, 'welcome']);