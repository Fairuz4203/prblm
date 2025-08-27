
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ProductController;



Auth::routes();

Route:: name('backend.')->middleware('web')->group(function (): void {
    Route::get('/dashboard',[BackendController::class, 'index'])->name('dashboard');
    // Banner routes
    Route::controller(BannerController::class)->name('banner.')->prefix('/banner')->group(function(): void {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{banner}', 'edit')->name('edit');
        Route::put('/update/{banner}', 'update')->name('update');
        Route::delete('/destroy/{banner}', 'destroy')->name('destroy');
        Route::get('/status-update/{id}', 'statusUpdate')->name('update.status');
    });
   
    
    // Categories
    Route::controller(CategoryController::class)->name('category.')->prefix('/category')->group(function(): void {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
         Route::get('/status-update/{id}','statusUpdate')->name('update.status');
       Route::get('/edit/{category}', 'edit')->name('edit');

    });


      // Products--------
    Route::controller(ProductController::class)->name('product.')->prefix('/product')->group(function(): void {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/status-update/{id}','statusUpdate')->name('update.status');
        Route::get('/stock-update/{id}','stockUpdate')->name('update.stock');
    });
});