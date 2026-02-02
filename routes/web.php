<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Adding ->middleware('auth') ensures the user is a logged-in member
Route::get('/checkout', \App\Livewire\Checkout::class)->name('checkout')->middleware('auth');
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');


//The {type} is a variable. It can be 'cleanser', 'serum', etc.
Route::get('/category/{type}', [ProductController::class, 'category'])->name('category.show');

// The {id} is a parameter that passes the product ID to the controller
Route::get('/product/{id}',[ProductController::class ,'show'])->name('product.details');

Route::get('/user/orders', function () {
    // Fetch orders for the logged-in user with their items
    $orders = Order::where('user_id', Auth::id())
                   ->with('items.product')
                   ->latest()
                   ->get();

    return view('user-orders', compact('orders'));
})->middleware('auth');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', \App\Http\Controllers\Admin\AdminDashboardController::class)->name('dashboard');
    
    // Resource Routes
    Route::resource('categories', \App\Http\Controllers\Admin\AdminCategoryController::class);
    Route::resource('products', \App\Http\Controllers\Admin\AdminProductController::class);
    // Customers (Users) - using 'customers' in URL but mapping to AdminCustomerController
    Route::resource('customers', \App\Http\Controllers\Admin\AdminCustomerController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\AdminOrderController::class);
});