
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Backend\CategoryController;


Auth::routes();

Route::name('backend.')->middleware('auth')->group(function (): void {
    Route::get('/dashboard',[BackendController::class, 'index'])->name('dashboard');
   
    
    // Categories
    Route::controller(CategoryController::class)->name('category.')->prefix('/category')->group(function(): void {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
});