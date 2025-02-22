<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Route Home
Route::get('/', [HomeController::class, 'index']);

// Route Products (Prefix)
Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('home-care', [ProductController::class, 'homeCare']);
    Route::get('baby-kid', [ProductController::class, 'babyKid']);
});

// Route User (Parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Route Penjualan (POS)
Route::get('/sales', [SalesController::class, 'index']);
