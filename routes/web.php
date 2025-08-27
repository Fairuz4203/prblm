<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;

Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/shop/{slug?}','categoryArchive')->name('category.archive');
    Route::get('/product/{slug}','showProduct')->name('product.show');
    Route::get('/contact-us','contact')->name('contact');
    Route::post('/review-submit', 'reviewSubmit')->name('review.submit');
    Route::get('/search','search')->name('search');
   
});








// Authentication routes
Auth::routes(); 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('login',[LoginController::class,'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




