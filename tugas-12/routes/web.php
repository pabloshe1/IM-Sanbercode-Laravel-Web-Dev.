<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', function() { return view('auth.login'); })->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Protected Routes (Harus Login)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Role Admin Saja (Poin 10): CRUD Category & CRUD Product
    Route::middleware('role:admin')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class)->except(['index', 'show']);
    });

    // Role Admin & Staff (Poin 10): Transaction & List Product
    Route::middleware('role:admin,staff')->group(function () {
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::get('/transactions', [TransactionController::class, 'index']);
        Route::post('/transactions', [TransactionController::class, 'store']);
    });
});