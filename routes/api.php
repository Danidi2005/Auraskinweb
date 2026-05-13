<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

// Public Routes
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);

// Protected Routes (Require Token)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/products', function () { return Product::all(); }); // All products
    Route::get('/products/{id}', function ($id) { return Product::findOrFail($id); }); // Single product
    Route::post('/checkout', [ApiAuthController::class, 'checkout']); // Create Order
});