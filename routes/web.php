<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'homePage']);
Route::get('/dashboard',[DashboardController::class,'dashboardPage'])->name('dashboardPage');
Route::get('/category',[CategoryController::class,'categorypage'])->name('categoryPage');
Route::get('/userRegi',[UserController::class,'gg'])->name('userRegi');
Route::get('/userlogin',[UserController::class,'userLoginPage'])->name('userlogin');
Route::get('/resetPassword',[UserController::class,'resetPasswordPage'])->name('resetPassword');
Route::get('/sendOpt',[UserController::class,'sendOtpPage'])->name('sendOpt');
Route::get('/verifyOtp',[UserController::class,'verifyOtpPage'])->name('verifyOtp');
Route::get('/userprofile',[UserController::class,'profilePage'])->name('userprofile');
Route::get('/customer',[CustomerController::class,'customerPage']);

Route::get('/invoicePage',[CustomerController::class,'invoicePage']);
Route::get('/reportPage',[CustomerController::class,'reportPage']);
Route::get('/salePage',[CustomerController::class,'salePage']);
Route::get('/productPage',[CustomerController::class,'productPage']);






