<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OtpController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SslCommerzPaymentController;



Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/shop/{slug?}','categoryArchive')->name('category.archive');
    Route::get('/product/{slug}','showProduct')->name('product.show');
    Route::get('/contact-us','contact')->name('contact');
    Route::post('/review-submit', 'reviewSubmit')->name('review.submit');
    Route::get('/search','search')->name('search');
   
});

// * Customer

Route::get('/sign-up',[CustomerController::class,'showRegisterform'])->name('customer.register');
Route::post('/sign-up',[CustomerController::class,'register'])->name('customer.register.confirm');
Route::get('/sign-in',[CustomerController::class,'showLoginForm'])->name('customer.login');
Route::post('/sign-in',[CustomerController::class,'login'])->name('customer.login.confirm');
Route::get('/sign-out',[CustomerController::class,'logout'])->name('customer.logout');
Route::get('/google/login',[CustomerController::class,'googleLogin'])->name('google.login');

Route::get('/google/redirect-url',[CustomerController::class,'googleCallback'])->name('google.callback');
;

Route::get('/my-account',[CustomerController::class, 'viewDashboard'])->middleware('customer')->name('customer.dashboard');




// Authentication routes
Auth::routes(); 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('login',[LoginController::class,'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/payment',[SslCommerzPaymentController::class, 'payViaAjax'])->name('payment');
Route::post('/success',[SslCommerzPaymentController::class,'success'])->name('success');

Route::post('/send-otp', [OtpController::class, 'sendOtp']);
Route::post('/verify-otp', [OtpController::class, 'verifyOtp']);






//* Add to Cart

Route::get('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('cart.add')->middleware('customer');
Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');