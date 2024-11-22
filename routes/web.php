<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

// Web API Routes
Route::post("/user-registration",[UserController::class, 'UserRegistration']);
Route::post("/user-login",[UserController::class, 'UserLogin']);
Route::post("/send-otp",[UserController::class, 'SendOTPCode']);
Route::post("/verify-otp",[UserController::class, 'VerifyOTP']);
Route::post("/reset-password",[UserController::class, 'ResetPassword']);

// Page Routes
Route::get("/userLogin",[UserController::class, 'LoginPage']);
Route::get("/userRegistration",[UserController::class, 'RegistrationPage']);
Route::get("/sendOtp",[UserController::class, 'SendOtpPage']);
Route::get("/verifyOtp",[UserController::class, 'VerifyOTPPage']);
Route::get("/resetPassword",[UserController::class, 'ResetPasswordPage']);


// Category API

Route::post("/create-category", [CategoryController::class, 'CategoryCreate'])->middleware([TokenVerificationMiddleware::class]);

