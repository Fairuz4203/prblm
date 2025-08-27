<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\ProductController;
// use App\Http\Controllers\Api\CategoryController;
// use App\Http\Controllers\Api\CartController;
// use App\Http\Controllers\Api\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public API routes
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{product}', [ProductController::class, 'show']);
// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{category}/products', [CategoryController::class, 'products']);

// Protected API routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    // User profile
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    // Cart management
    // Route::get('/cart', [CartController::class, 'index']);
    // Route::post('/cart/add', [CartController::class, 'add']);
    // Route::put('/cart/update/{item}', [CartController::class, 'update']);
    // Route::delete('/cart/remove/{item}', [CartController::class, 'remove']);
    // Route::delete('/cart/clear', [CartController::class, 'clear']);
    
    // Orders
    // Route::get('/orders', [OrderController::class, 'index']);
    // Route::post('/orders', [OrderController::class, 'store']);
    // Route::get('/orders/{order}', [OrderController::class, 'show']);
    
    // User favorites/wishlist
    // Route::get('/favorites', [ProductController::class, 'favorites']);
    // Route::post('/favorites/{product}', [ProductController::class, 'addToFavorites']);
    // Route::delete('/favorites/{product}', [ProductController::class, 'removeFromFavorites']);
}); 