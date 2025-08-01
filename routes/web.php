<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;

Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/contact-us','contact')->name('contact');
});

// Authentication routes
Auth::routes(); 

Route::post('login',[LoginController::class,'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




